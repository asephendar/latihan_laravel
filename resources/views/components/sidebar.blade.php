@props(['items' => []])

<div class="drawer-side" x-data="{ active: window.location.pathname }">
    <label for="my-drawer-3" class="drawer-overlay"></label>
    <ul class="menu bg-base-200 min-h-full w-64 p-4">
        @foreach ($items as $item)
            <li :class="active === '{{ $item['url'] }}' ? 'bg-primary text-white' : ''">
                <a href="{{ $item['url'] }}" class="{{ $item['class'] ?? '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.5" d="{{ $item['icon'] }}" />
                    </svg>
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
