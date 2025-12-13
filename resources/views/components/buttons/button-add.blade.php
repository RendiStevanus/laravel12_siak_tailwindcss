<div>
    <a @if ($action) wire:click.prevent="{{ $action }}"
        @elseif (isset($attributes['wire:click']))
            {{ $attributes->only('wire:click') }} @endif
        @if ($href ?? false) href="{{ $href }}"
        @elseif (isset($attributes['href']))
            {{ $attributes->only('href') }} @endif
        wire:navigate
        {{ $attributes->merge(['class' => 'inline-flex items-center font-medium gap-1 rounded-lg transition px-2.5 py-1 text-sm bg-brand-500 text-white shadow-theme-xs hover:bg-brand-600']) }}>

        <span class="flex items-center">
            <svg width="15" height="15" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 4V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M4 10H16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
        </span>

        {{ $title }}
    </a>
</div>
