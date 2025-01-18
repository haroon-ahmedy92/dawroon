@props([
    'text' => 'Save',
    'class' => 'custom-class', 
    'disabled' => false 
  ])
<button
  type="{{ $type ?? 'button' }}"
  class="py-2.5 px-4 inline-flex rounded-lg text-sm font-medium bg-primary text-white transition-all hover:bg-primary-500 {{ $class ?? '' }}"
  {{ isset($disabled) && $disabled ? 'disabled' : '' }}
>
  {{ $text ?? 'Save' }}
</button>