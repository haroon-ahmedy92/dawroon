@props([
    'buttonText' => 'Save as Draft', 
    'buttonIcon' => 'chevron-down', 
    'buttonClass' => 'hover:bg-default-200', 
    'disabled' => false,
    'menuItems' => [
      ['text' => 'Publish', 'href' => 'javascript:void(0)'],
      ['text' => 'Save as Draft', 'href' => 'javascript:void(0)'],
      ['text' => 'Discard', 'href' => 'javascript:void(0)'],
    ],
    'menuClass' => 'custom-menu-class' // Optional: Additional classes for the dropdown menu
  ])
<div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
    {{-- Button --}}
    <button
      type="{{ $buttonType ?? 'button' }}"
      class="hs-dropdown-toggle flex items-center gap-2 font-medium text-default-700 text-sm py-2.5 px-4 rounded-md bg-default-100 transition-all {{ $buttonClass ?? '' }}"
      {{ isset($disabled) && $disabled ? 'disabled' : '' }}
    >
      {{ $buttonText ?? 'Save as Draft' }}
      <i data-lucide="{{ $buttonIcon ?? 'chevron-down' }}" class="h-4 w-4"></i>
    </button>
  
    {{-- Dropdown Menu --}}
    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[200px] transition-[opacity,margin] mt-4 opacity-0 hidden z-20 bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] rounded-lg border border-default-100 p-1.5 dark:bg-default-50 {{ $menuClass ?? '' }}">
      <ul class="flex flex-col gap-1">
        @foreach($menuItems as $item)
          <li>
            <a
              class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded"
              href="{{ $item['href'] ?? 'javascript:void(0)' }}"
            >
              {{ $item['text'] }}
            </a>
          </li>
        @endforeach
      </ul><!-- end dropdown items -->
    </div><!-- end dropdown menu -->
  </div>