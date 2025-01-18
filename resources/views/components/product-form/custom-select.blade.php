@props([
    'id' => 'all-select-categories',
    'name' => 'category',
    'placeholder' => 'Select Type',
    'options' => [
      'Apples' => 'Apples',
      'Bakery' => 'Bakery',
      'Bakery Buns' => 'Bakery Buns',
      'Beverage' => 'Beverage',
      'Biscuits' => 'Biscuits',
      'Berries' => 'Berries',
      'Bread' => 'Bread',
      'Butter' => 'Butter',
      'Cakes' => 'Cakes',
      'Carrots' => 'Carrots',
      'Canned food' => 'Canned food',
      'Condiments' => 'Condiments',
      'Dairy' => 'Dairy',
      'Deli' => 'Deli',
      'Dried goods' => 'Dried goods',
      'Eggs' => 'Eggs',
      'Food Freezing' => 'Food Freezing',
      'Fruits' => 'Fruits',
      'Meat' => 'Meat',
      'Produce' => 'Produce',
      'Snacks' => 'Snacks',
      'Seafood' => 'Seafood',
      'Vegetables' => 'Vegetables',
    ],
    'required' => true 
  ])


<div class="relative">
    <select
      id="{{ $id }}"
      data-hs-select='{
        "placeholder": "{{ $placeholder }}",
        "toggleTag": "<button type=\"button\"></button>",
        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
        "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50 [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-default-300",
        "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
      }'
      class="hidden"
      name="{{ $name }}"
      {{ isset($required) && $required ? 'required' : '' }}
      {{ isset($disabled) && $disabled ? 'disabled' : '' }}
      {{ isset($readonly) && $readonly ? 'readonly' : '' }}
    >
      <option></option> 
      @foreach($options as $value => $label)
        <option value="{{ $value }}">{{ $label }}</option>
      @endforeach
    </select>
  
    
    <div class="absolute -inset-y-0 end-3 flex items-center">
      <i class="ti ti-selector shrink text-base/none text-default-500"></i>
    </div>
  </div>