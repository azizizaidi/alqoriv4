<?php

/**
 * League.Csv (https://csv.thephpleague.com)
 *
 * (c) Ignace Nyamagana Butera <nyamsprod@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace League\Csv;

use Deprecated;
use InvalidArgumentException;
use php_user_filter;
use Throwable;

use function array_map;
use function in_array;
use function restore_error_handler;
use function set_error_handler;
use function str_replace;
use function strcspn;
use function stream_bucket_append;
use function stream_bucket_make_writeable;
use function stream_bucket_new;
use function stream_filter_register;
use function stream_get_filters;
use function strlen;
use function trigger_error;

use const E_USER_WARNING;
use const PSFS_ERR_FATAL;
use const PSFS_PASS_ON;

/**
 * A stream filter to improve enclosure character usage.
 *
 * DEPRECATION WARNING! This class will be removed in the next major point release
 *
 * @deprecated since version 9.10.0
 * @see Writer::forceEnclosure()
 *
 * @see https://tools.ietf.org/html/rfc4180#section-2
 * @see https://bugs.php.net/bug.php?id=38301
 */
class EncloseField extends php_user_filter
{
    #[Deprecated(message: 'use League\Csv\Writer::forceEnclosure() instead', since: 'league/csv:9.10.0')]
    public const FILTERNAME = 'convert.league.csv.enclosure';

    /** Default sequence. */
    protected string $sequence = '';
    /** Characters that triggers enclosure in PHP. */
    protected static string $force_enclosure = "\n\r\t ";

    /**
     * Static method to return the stream filter filtername.
     */
    public static function getFiltername(): string
    {
        return self::FILTERNAME;
    }

    /**
     * Static method to register the class as a stream filter.
     */
    public static function register(): void
    {
        if (!in_array(self::FILTERNAME, stream_get_filters(), true)) {
            stream_filter_register(self::FILTERNAME, self::class);
        }
    }

    /**
     * Static method to add the stream filter to a {@link Writer} object.
     *
     * @throws InvalidArgumentException if the sequence is malformed
     * @throws Exception
     */
    public static function addTo(Writer $csv, string $sequence): Writer
    {
        self::register();

        if (!self::isValidSequence($sequence)) {
            throw new InvalidArgumentException('The sequence must contain at least one character to force enclosure');
        }

        return $csv
            ->addFormatter(fn (array $record): array => array_map(fn (?string $value): string => $sequence.$value, $record))
            ->addStreamFilter(self::FILTERNAME, ['sequence' => $sequence]);
    }

    /**
     * Filter type and sequence parameters.
     *
     * The sequence to force enclosure MUST contain one of the following character ("\n\r\t ")
     */
    protected static function isValidSequence(string $sequence): bool
    {
        return strlen($sequence) !== strcspn($sequence, self::$force_enclosure);
    }

    #[Deprecated(message: 'use League\Csv\Writer::forceEnclosure() instead', since: 'league/csv:9.10.0')]
    public function onCreate(): bool
    {
        return is_array($this->params)
            && isset($this->params['sequence'])
            && self::isValidSequence($this->params['sequence']);
    }

    /**
     * @param resource $in
     * @param resource $out
     * @param int $consumed
     */
    public function filter($in, $out, &$consumed, bool $closing): int
    {
        $data = '';
        while (null !== ($bucket = stream_bucket_make_writeable($in))) {
            $data .= $bucket->data;
            $consumed += $bucket->datalen;
        }

        /** @var array $params */
        $params = $this->params;
        try {
            $data = str_replace($params['sequence'], '', $data);
        } catch (Throwable $exception) {
            trigger_error('An error occurred while executing the stream filter `'.$this->filtername.'`: '.$exception->getMessage(), E_USER_WARNING);

            return PSFS_ERR_FATAL;
        }

        set_error_handler(fn (int $errno, string $errstr, string $errfile, int $errline) => true);
        stream_bucket_append($out, stream_bucket_new($this->stream, $data));
        restore_error_handler();

        return PSFS_PASS_ON;
    }
}
