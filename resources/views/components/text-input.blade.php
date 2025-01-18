@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(["class" => "block w-full rounded-md py-2.5 px-4 border border-default-400/40 bg-transparent text-default-900 focus:outline-0 focus:ring-0"]) }}>   
