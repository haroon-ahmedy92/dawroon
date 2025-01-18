@props([
    'heading' => 'Discount',
    'label' => 'Add Discount',
    'id' => 'addDiscount',
    'name' => 'add_discount',
    'checked' => false, 
    'disabled' => false
  ])
<div class="flex justify-between">
    {{-- Heading --}}
    <h4 class="text-sm font-medium text-default-600">{{ $heading }}</h4>
  
    {{-- Toggle Switch --}}
    <div class="flex items-center gap-4">
      <label class="block text-sm text-default-600" for="{{ $id }}">{{ $label }}</label>
      <input
        type="checkbox"
        id="{{ $id }}"
        class="relative w-[3.25rem] h-7 bg-default-200 focus:ring-0 checked:bg-none checked:!bg-primary border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 appearance-none focus:ring-transparent before:inline-block before:w-6 before:h-6 before:bg-white before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:transition before:ease-in-out before:duration-200"
        name="{{ $name }}"
        {{ isset($checked) && $checked ? 'checked' : '' }}
        {{ isset($disabled) && $disabled ? 'disabled' : '' }}
      >
    </div>
  </div>