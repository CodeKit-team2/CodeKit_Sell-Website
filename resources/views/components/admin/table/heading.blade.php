@props([
    'sortable' => null,
    'direction' => null,
])

<th {{ $attributes->merge(['class' => 'px-6 py-3 bg-gray-200'])->only('class') }}>
    @unless($sortable)
        <div class="flex">
            <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                {{ $slot }}
            </span>
        </div>
    @else
        <button {{ $attributes->except('class') }} class="flex items-center space-x-1 text-left leading-4 font-medium hover:underline hover:text-gray-800">

            <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wide">
                {{ $slot }}
            </span>

            <span>
                @if($direction === 'asc')
                    <i class="fas fa-angle-up text-gray-500 text-sm"></i>
                @elseif($direction === 'desc')
                    <i class="fas fa-angle-down text-gray-500 text-sm"></i>
                @else

                @endif
            </span>
        </button>
    @endif
</th>
