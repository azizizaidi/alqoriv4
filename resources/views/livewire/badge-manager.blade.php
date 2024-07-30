<div>
@if ($badgeCount)
        <span class="badge">{{ $badgeCount }}</span>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navigationItem = document.querySelector('[href="/filament/information"]'); // Update the selector based on your navigation structure
        navigationItem.addEventListener('click', function () {
            Livewire.emit('removeBadge');
        });
    });
</script>
