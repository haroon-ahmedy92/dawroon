@props([
    'id' => 'editor',
    'label' => 'Product Long Description',
    'content' => '<h3>Your text goes here</h3>',
    'description' => 'Add a long description for your product', 
    'editorClass' => 'custom-editor-class' 
  ])
<div>
    {{-- Label --}}
    <label class="block text-sm font-medium text-default-900 mb-2" for="{{ $id }}">{{ $label }}</label>
  
    {{-- Editor Container --}}
    <div id="{{ $id }}" class="h-36 mb-2 {{ $editorClass ?? '' }}">
      {!! $content ?? '<h3>Your text goes here</h3>' !!}
    </div>
  
    {{-- Description Text --}}
    @if(isset($description))
      <p class="text-sm text-default-600">{{ $description }}</p>
    @endif
  </div>