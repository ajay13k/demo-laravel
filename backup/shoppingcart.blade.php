
 <div class="container-fluid">
  <div>
@include('layouts.header')
</div>
                           <div class="row align-items-center py-3 px-xl-5">
                              <div class="col-lg-3 d-none d-lg-block">
                                 <a href="/" class="text-decoration-none">
                                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                                 </a>
                              </div>
                              <div class="col-lg-6 col-6 text-left">
                                <form action="">
                                    <div class="input-group">
                                       <input type="text" class="form-control" placeholder="Search for products">
                                       <div class="input-group-append">
                                          <span class="input-group-text bg-transparent text-primary">
                                             <i class="fa fa-search"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </form> 
                              </div>
                              <div class="col-lg-3 col-6">
                                 @auth
                                 @include('layouts.navigation')
                                 @else
                                 @include('layouts.gurestnavbar')
                                 @endauth
                              </div>
                           </div>
                           
                           
                           
                               <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<div>
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
                        <!-- @if(!empty($cartitems)) -->
                        @foreach ($cartitems as $item)
                        <tr>
                            <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                    {{-- <img src="{{ $item->product->image }}" class="w-20 rounded" alt="Thumbnail" /> --}}
                                    <img width="100px" src="{{ asset('storage/media/' . $item->product->image) }}" class="w-20 rounded" alt="Thumbnail" />
                                </a>
                            </td>
                            <td>
                                <p class="mb-2 md:ml-4">{{ $item->product->name }}</p>
                                <button type="submit" class="md:ml-4 text-red-700" wire:click="removeItem({{ $item->id }})">
                                    <small>(Remove item)</small>
                                </button>
                            </td>
                            <td class="justify-center md:justify-end md:flex mt-6">
                                <div class="w-20 h-10">
                                    <div class="custom-number-input h-10 w-32">
                                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                            <button class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none" wire:click="decrementQty({{ $item->id }})">
                                                <span class="m-auto text-2xl font-thin">−</span>
                                            </button>
                                            <span class="p-2">{{ $item->quantity }}</span>
                                            <button class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer" wire:click="incrementQty({{ $item->id }})">
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
                        <!-- @endif -->
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
                            <div style="padding-top: 20px;padding-left:100px">
                                <td colspan="5" class="text-right">
                                    <a href="{{ url('/') }}" class="btn btn-warning">Continue Shopping</a>
                                    <a href="/order"> <button class="btn btn-success">Checkout</button></a>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
 @include('layouts.footer')
</div>
</div>
   <link href="{{ asset('mangoecart/css/style.css') }}" rel="stylesheet">
