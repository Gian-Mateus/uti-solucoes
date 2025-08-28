<div class="px-2">
    @foreach ($items as $i)
        <x-menu-item title="{{ $i['label'] }}" icon="{{ $i['icon'] ?? '' }}" link="{{ $i['link'] ?? '####' }}" />
    @endforeach
    <x-menu-separator />
</div>
