@props([
    'id' => 'datepicker-basic',
    'name' => 'expiry_date',
    'placeholder' => 'Select Expiry Date',
    'class' => 'mb-4', // Optional additional class
    'required' => true 
  ])
<div>
    <div class="relative">
      {{-- Calendar Icon --}}
      <span class="absolute top-1/2 start-2.5 -translate-y-1/2">
        <i data-lucide="calendar-days" class="h-4 w-4 text-default-700"></i>
      </span>
  
      {{-- Date Picker Input --}}
      <input
        type="text"
        class="block w-full rounded-md py-2.5 px-9 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 {{ $class ?? '' }}"
        id="{{ $id }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ $value ?? '' }}"
        {{ isset($required) && $required ? 'required' : '' }}
        {{ isset($disabled) && $disabled ? 'disabled' : '' }}
        {{ isset($readonly) && $readonly ? 'readonly' : '' }}
      >
  
      {{-- Dropdown Icon --}}
      <span class="absolute top-1/2 end-2.5 -translate-y-1/2">
        <i data-lucide="chevron-down" class="h-4 w-4 text-default-700"></i>
      </span>
    </div><!-- end relative -->
  </div>