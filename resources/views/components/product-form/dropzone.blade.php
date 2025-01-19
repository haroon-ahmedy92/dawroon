@props([
    // common
    'name' => 'file',
    'class' => '',
    'title' => 'Upload Image.',
    'titleClass' => '',
    // for cover image
    'description' => null,
    'fileFormat' => null,
    'recommendedSize' => null,
    // for the additional images
    'height' => 'h-60',
    'showPlaceholder' => false,
    'placeholderClass' => '',
    'placeholderContent' => '',
])

<div class="{{ $class }} dropzone {{ $height }} mb-6 relative cursor-pointer" onclick="document.getElementById('{{ $name }}-input').click()">
    <!-- Hidden file input -->
    <input id="{{ $name }}-input" name="{{ $name }}" type="file" multiple="multiple" class="hidden">

    <!-- Dropzone content -->
    <div class="dz-message needsclick w-full">
        <div class="mb-3">
            <i class="ti ti-photo-circle text-4xl text-primary"></i>
        </div>

        <h5 class="{{ $titleClass }}">
            <i class="ti ti-cloud-upload text-lg text-default-600"></i> {{ $title }}
        </h5>

        @if (isset($description))
            <p class="text-sm text-default-600 mb-2">{{ $description }}</p>
        @endif

        @if (isset($fileFormat) && isset($recommendedSize))
            <p class="text-sm text-default-600">
                File Format <span class="text-default-800">{{ $fileFormat }}</span>
                Recommended Size <span class="text-default-800">{{ $recommendedSize }}</span>
            </p>
        @endif
    </div>
</div>

@if (isset($showPlaceholder) && $showPlaceholder)
    <div class="flex flex-col items-center justify-center rounded-lg border border-dashed border-default-200 {{ $placeholderClass }} cursor-pointer" onclick="document.getElementById('{{ $name }}-input').click()">
        {{ $placeholderContent ?? '' }}
    </div>
@endif