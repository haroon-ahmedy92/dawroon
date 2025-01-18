
@props(['type' => 'small'])

@php
  $class = 'grid gap-6';

  if ($type === 'small') {
      $class .= ' lg:grid-cols-4 sm:grid-cols-2';    
  } elseif ($type === 'large') {
      $class .= ' xl:grid-cols-6 md:grid-cols-2 grid-cols-1';    
  }
@endphp

{{-- <div class="grid xl:grid-cols-6 md:grid-cols-2 grid-cols-1 gap-6"> --}}



<div class="{{ $class }}">
  {{ $slot }}
</div>

