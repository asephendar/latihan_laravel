@props(['items' => []])

<div class="breadcrumbs text-sm">
    <ul>
        @foreach ($items as $item)
            <li>
                @if (isset($item['url']))
                    <a href="{{ $item['url'] }}">
                @else
                    <span class="inline-flex items-center gap-2">
                @endif
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="h-4 w-4 stroke-current">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="{{ $item['icon'] }}"></path>
                    </svg>
                    {{ $item['label'] }}
                @if (isset($item['url']))
                    </a>
                @else
                    </span>
                @endif
            </li>
        @endforeach
    </ul>
</div>
