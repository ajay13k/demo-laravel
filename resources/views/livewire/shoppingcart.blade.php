<div>
    @include('layouts.flash-message')
    <div class="flex justify-center my-6">
        <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
            <div class="flex-1">
                <table class="w-full text-sm lg:text-base" cellspacing="0">
                    <thead>
                        <tr class="h-12 uppercase">
                            <th class="hidden md:table-cell"></th>
                            <th class="text-left">Product</th>
                            <th class="lg:text-right text-left pl-5 lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">Quantity</span>
                            </th>
                            <th class="hidden text-right md:table-cell">Unit price</th>
                            <th class="text-right">Total price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartitems as $item)
                            <tr>
                                <td class="hidden pb-4 md:table-cell">
                                    <a href="#">
                                        {{-- <img src="{{ $item->product->image }}" class="w-20 rounded" alt="Thumbnail" /> --}}
                                        <img width="100px" src="{{ asset('storage/media/' . $item->product->image) }}"
                                            class="w-20 rounded" alt="Thumbnail" />
                                    </a>
                                </td>
                                <td>
                                    <p class="mb-2 md:ml-4">{{ $item->product->name }}</p>
                                    <button type="submit" class="md:ml-4 text-red-700"
                                        wire:click="removeItem({{ $item->id }})">
                                        <small>(Remove item)</small>
                                    </button>
                                </td>
                                <td class="justify-center md:justify-end md:flex mt-6">
                                    <div class="w-20 h-10">
                                        <div class="custom-number-input h-10 w-32">
                                            <div
                                                class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                                <button
                                                    class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none"
                                                    wire:click="decrementQty({{ $item->id }})">
                                                    <span class="m-auto text-2xl font-thin">−</span>
                                                </button>
                                                <span class="p-2">{{ $item->quantity }}</span>
                                                <button
                                                    class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer"
                                                    wire:click="incrementQty({{ $item->id }})">
                                                    <span class="m-auto text-2xl font-thin">+</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="hidden text-right md:table-cell">
                                    <span class="text-sm lg:text-base font-medium">
                                        {{ $item->product->price }}$
                                    </span>
                                </td>
                                <td class="text-right">
                                    <span class="text-sm lg:text-base font-medium">
                                        {{ $item->product->price * $item->quantity }}$
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr class="pb-6 mt-6" />
                <div class="my-4 mt-6 -mx-2 lg:flex">
                    <div class="lg:px-2 lg:w-1/2"></div>
                    <div class="lg:px-2 lg:w-1/2">
                        <div class="p-4 bg-gray-100 rounded-full">
                            <h1 class="ml-2 font-bold uppercase">Order Details</h1>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between border-b">
                                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                    Subtotal
                                </div>
                                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                                    {{ $sub_total }}$
                                </div>
                            </div>
                            <div class="flex justify-between pt-4 border-b">
                                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                    Tax
                                </div>
                                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                                    {{ $tax }}$
                                </div>
                            </div>
                            <div class="flex justify-between pt-4 border-b">
                                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                    Total
                                </div>
                                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                                    {{ $this->total }}$
                                </div>
                            </div>

                            <a href="#">
                                <button
                                    class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none"
                                    wire:click="checkout" wire:loading.attr="disabled">
                                    <span class="ml-2 mt-5px">Procceed to checkout</span>
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
