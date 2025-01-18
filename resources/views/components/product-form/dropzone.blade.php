 @props([
     // common
     'action' => '#',
     'class',
     'title' => 'Upload Image.',
     'titleClass',
     //   for cover image
     'description',
     'fileFormat',
     'recommendedSize',
     //  for the additional images
     'height',
     'showPlaceholder',
     'placeholderClass',
     'placeholderContent',
 ])

 <form action="{{ $action }}" class="{{ $class }} dropzone {{ $height ?? 'h-60' }} mb-6">
     <div class="fallback">
         <input name="file" type="file" multiple="multiple">
     </div>
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
                 Recommened Size <span class="text-default-800">{{ $recommendedSize }}</span>
             </p>
         @endif
     </div>
 </form>

 @if (isset($showPlaceholder) && $showPlaceholder)
     <div class="flex flex-col items-center justify-center rounded-lg border border-dashed border-default-200 ">
         {{ $placeholderContent ?? '' }}
     </div>
 @endif
