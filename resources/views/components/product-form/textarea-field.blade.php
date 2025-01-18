@props( [
    'placeholder' => 'Short Description',
    'name' => 'short_description',
    'rows' => 5, 
    'class' => 'mb-4', 
    'required' => true 
  ])
<div>
    <textarea
      class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 {{ $class ?? '' }}"
      rows="{{ $rows ?? 5 }}"
      placeholder="{{ $placeholder }}"
      name="{{ $name }}"
      {{ isset($required) && $required ? 'required' : '' }}
      {{ isset($disabled) && $disabled ? 'disabled' : '' }}
      {{ isset($readonly) && $readonly ? 'readonly' : '' }}
    >{{ $value ?? '' }}</textarea>
  </div>