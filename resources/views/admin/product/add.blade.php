<x-main-layout>
    <x-root.dashboardMenu title="Add Product" :links="['GreenCart', 'Products', 'Add Product']" />

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">

        <x-card.card-header title="Total Sales" :dropdown="true" :options="['Action', 'Another Action', 'Something else here']" />

        <!-- Form Starts Here -->
        <x-product-form.form method="POST" action="#" enctype="multipart/form-data">
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="grid lg:grid-cols-3 gap-6">

                    <div class="">

                        <x-product-form.dropzone 
                            name="cover_image" 
                            class="product-dropzone" 
                            title="Upload Cover Image"
                            titleClass="text-xl text-default-600" 
                            description="Upload a cover image for your product."
                            fileFormat="jpeg, png" 
                            recommendedSize="600x600 (1:1)" />

                        <div class="grid grid-cols-2 gap-6">

                            <x-product-form.dropzone 
                            name="additional_images[]" 
                            class="additional-dropzone"
                            title="Upload Additional Images" 
                            titleClass="text-base text-default-600" 
                            height="h-auto"
                            :showPlaceholder="true" 
                            placeholderClass="h-40"
                            placeholderContent="Drag and drop additional images here" />

                        </div>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="grid lg:grid-cols-2 gap-6 mb-6">
                            <div class="space-y-6">
                                <div>
                                    <x-text-input type="text" name="product_name" placeholder="Product Name" />
                                </div>

                                <x-product-form.custom-select name="category" />
                                <!-- End Select -->

                                <div class="grid lg:grid-cols-2 gap-6">
                                    <div>
                                        <x-text-input type="text" name="selling_price" placeholder="Selling Price" />
                                    </div>

                                    <div>
                                        <x-text-input type="text" name="cost_price" placeholder="Cost Price" />
                                    </div>
                                </div>

                                <div>
                                    <x-text-input type="number" name="quantity" placeholder="Quantity in Stock" />
                                </div>

                                <x-product-form.custom-select name="order_type" :options="['Delivery' => 'Delivery', 'Pickup' => 'Pickup', 'Dine-in' => 'Dine-in']"
                                    placeholder="Order type" />
                                <!-- End Select -->
                                <x-product-form.product-toggle name="is_featured" />

                                <x-product-form.product-toggle heading="Expiry Date" label="Add Expiry Date"
                                    id="addExpiryDate" name="add_ExpiryDate" />

                            </div>

                            <div class="space-y-6">

                                <x-product-form.textarea-field name="description" />

                                <x-product-form.rich-text-editor name="rich_description" />

                                <x-product-form.product-toggle heading="Return Policy" label="Return Policy"
                                    id="returnPolicy" name="add_returnPolicy" />
                                <div>
                                    <p class="text-xs text-default-500 mb-3">Date Added</p>
                                    <div class="grid lg:grid-cols-2 gap-6">

                                        <x-product-form.date-picker name="date_added" />
                                        <x-product-form.date-picker id="timepicker" name="time_added" />

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3">
                        <div class="flex flex-wrap justify-end items-center gap-4">
                            <div class="flex flex-wrap items-center gap-4">

                                <x-product-form.save-draft-button />

                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </x-product-form.form>
        <!-- Form Ends Here -->

    </div>
</x-main-layout>
