<div class="px-6 py-4 flex items-center justify-between gap-4">
    <h5 class="grow text-lg font-medium text-default-900">{{ $title }}</h5>
    @if ($dropdown)
        <div class="shrink hs-dropdown relative [--placement:bottom-right] group">
            <button type="button" class="hs-dropdown-toggle h-8 w-8 inline-flex items-center justify-center bg-default-950/5 border border-default-200 rounded-full text-base group-[&.open]:rotate-90 transition-all duration-500">
                <i class="ti ti-dots-vertical"></i>
            </button>

            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[180px] transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white dark:bg-default-50 shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                <ul class="flex flex-col gap-1">
                    @foreach ($options as $item)
                        <li>
                            <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>