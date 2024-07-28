# Changelog

All notable changes to `laravel-route-statistics` will be documented in this file.

### 1.* => 2.*

No breaking changes. The only changes are to the development dependencies used for testing and then the minimum Laravel and PHP requirements.

## Changes

### 2.2.0 - 2023-07-24

- Add support for PHP 8.1

### 2.1.0 - 2023-06-22

- Add queued logging

### 2.0.1 - 2023-05-16

- Use model 'casts' property instead of the depricated `dates` property

### 2.0.0 - 2023-05-01

- Add support for PHP 8.2
- Minimum PHP requirement 8.2
- Add support for Laravel 10.*
- Minimum Laravel requirement 10.0

### 1.1.0

- Add query scopes `whereApi` and `whereWeb` to the `RouteStatistics` model.
- Add a new `route:stats` artisan command to show statistics of all logged routes.
- Add a new `route:unused` artisan command to show all routes without any logs.

### 1.0.0

- First production ready release

### 0.5.0

- Rename field `code` to `status` (**breaking change**)
- Cast date field to Carbon (**breaking change**)

### 0.4.0

- Remove the facade and listener and instead rely on the `bilfeldt/laravel-request-logger` package for actual logging.
- Remove `RouteStatisticInterface` in favor of `\Bilfeldt\RequestLogger\Contracts\RequestLoggerInterface`
- Remove attributes from log method
- Rename \Bilfeldt\LaravelRouteStatistics\Http\Middleware\RouteStatistics to RouteStatisticsMiddleware
- Set minimum Laravel requirement to ^8.50
- Note that this release contains breaking changes if one interacting with the facade, model, listener or interface directly but for those simply relying on the default macros and middleware there is no problem updating.

### 0.3.0

- Fix issue with Factory
- Fix issue with event/listener registration

### 0.2.0

- Implement usage of facade and singleton class instead of adding data to the request input

### 0.1.1

- Fix issue with publishing of config and migration

### 0.1.0

- initial release
