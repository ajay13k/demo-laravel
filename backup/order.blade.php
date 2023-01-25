
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="MSwwGbRSIm5J9uWHUNKWfxG27oSx5DgAI4UciS8K">
      <title>MangoIT ECart</title>
      <link href="img/favicon.ico" rel="icon">
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
         rel="stylesheet">
      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <!-- Libraries Stylesheet -->
      <link href="/resources/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <!-- Customized Bootstrap Stylesheet -->
      <link href="/resources/css/style.css" rel="stylesheet">
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
      <!-- Styles -->
    <link href="{{ asset('mangoecart/css/style.css') }}" rel="stylesheet">
      <!-- Scripts -->
      <script src="https://mango-ecart.mangoitsol.com/js/app.js" defer></script>
      <!-- Livewire Styles -->
      <style>
         [wire\:loading],
         [wire\:loading\.delay],
         [wire\:loading\.inline-block],
         [wire\:loading\.inline],
         [wire\:loading\.block],
         [wire\:loading\.flex],
         [wire\:loading\.table],
         [wire\:loading\.grid],
         [wire\:loading\.inline-flex] {
         display: none;
         }
         [wire\:loading\.delay\.shortest],
         [wire\:loading\.delay\.shorter],
         [wire\:loading\.delay\.short],
         [wire\:loading\.delay\.long],
         [wire\:loading\.delay\.longer],
         [wire\:loading\.delay\.longest] {
         display: none;
         }
         [wire\:offline] {
         display: none;
         }
         [wire\:dirty]:not(textarea):not(input):not(select) {
         display: none;
         }
         input:-webkit-autofill,
         select:-webkit-autofill,
         textarea:-webkit-autofill {
         animation-duration: 50000s;
         animation-name: livewireautofill;
         }
         @keyframes livewireautofill {
         from {}
         }
      </style>
   </head>
   <body class="font-sans antialiased">
      <div class="min-h-screen bg-gray-100">
      <!-- Page Content -->
      <main>
      <div class="">
      <div class="">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">
      <div wire:id="AXouIpCWTzomaIE0HQ08"
         wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;AXouIpCWTzomaIE0HQ08&quot;,&quot;name&quot;:&quot;productlist&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:{&quot;l344222909-0&quot;:{&quot;id&quot;:&quot;2nC5yY5hUq6MTOrYLFWK&quot;,&quot;tag&quot;:&quot;div&quot;}},&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;e9763d0f&quot;,&quot;data&quot;:{&quot;products&quot;:[]},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;products&quot;:{&quot;class&quot;:&quot;App\\Models\\Product&quot;,&quot;id&quot;:[57,58,59,62,63,64,65,68],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;}}},&quot;checksum&quot;:&quot;ace6be00e896f3bfcd6c8eeb8044746ed747b489fed2bbd172b87c1830d32999&quot;}}">
      <main class="my-2">
      <div class="container-fluid">
          <div>
                @include('layouts.header')
            </div>
                    <div class="row align-items-center py-3 px-xl-5">
        </div>
            
                <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
         <div class="container" style="margin-top:20px">
            <div class="row ">
               <div class="col-md-6 ">
                   <div class="card-header bg-secondary border-0 mb-3">
                       <h5 class="font-weight-semi-bold m-0">Billing Address</h5>
                   </div>
                  <form method="POST" action="/orderplace">
                     @csrf
                     @foreach ($user as $item)
                     <div class="form-group">
                        <label for="name">Full Name :</label>
                        <input placeholder="enter your fullname"
                           value="{{ $item->name }}" name="name"
                           id="name" class="form-control" />
                     </div>
                     <div class="form-group">
                        <label for="email">Email :</label>
                        <input placeholder="enter your email"
                           value="{{ $item->email }}" name="email"
                           id="email" class="form-control" />
                     </div>
                     @endforeach
                     @foreach ($address as $item)
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">Address1 :</label>
                              <input placeholder="enter your address1"
                                 id="address1" name="address1" value="{{ $item->billing_address1 }}"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">Address2 :</label>
                              <input placeholder="enter your address2"
                                 id="address2" name="address2" value="{{ $item->billing_address2 }}"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="country">Country :</label>
                              <input placeholder="enter your country"
                                 id="country" name="country" value="{{ $item->billing_country }}"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="state">State :</label>
                              <input placeholder="enter your state"
                                 id="state" name="state" value="{{ $item->billing_state }}"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="text">Zip :</label>
                              <input type="text" placeholder="zip code"
                                 id="zip" name="zip" value="{{ $item->billing_zip }}"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="text">Phone :</label>
                              <input type="tel" placeholder="contect number"
                                 id="phone" name="phone" value="{{ $item->billing_phone }}"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                         <div class="card-header bg-secondary border-0">
                           <h5 class="font-weight-semi-bold m-0">Shipping Address</h5>
                        </div>
                     <input type="checkbox" id="check-address" name="sameadr">
                     Shipping address same as billing
                     <div class="row mt-2">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">Address1 :</label>
                              <input placeholder="enter your address1"
                                 id="txtaddress1_billing"
                                 name="txtaddress1_billing" value="{{ $item->shipping_address1 }}"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">Address2 :</label>
                              <input placeholder="enter your address2"
                                 id="txtaddress2_billing"
                                 name="txtaddress2_billing" value="{{ $item->shipping_address2 }}"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="country">Country :</label>
                              <input placeholder="enter your country"
                                 id="txtcountry_billing"
                                 name="txtcountry_billing" value="{{ $item->shipping_country }}"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="state">State :</label>
                              <input placeholder="enter your state"
                                 id="txtstate_billing" name="txtstate_billing" value="{{ $item->shipping_state }}"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="text">Zip :</label>
                              <input type="tel" placeholder="zip"
                                 id="txtzip_billing" name="txtzip_billing" value="{{ $item->shipping_zip }}"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="text">Phone :</label>
                              <input type="tel" placeholder="contect number"
                                 id="txtphone_billing" name="txtphone_billing" value="{{ $item->shipping_phone }}"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                      @endforeach
                     <div class="col-md-12">
                        <div class="form-group">
                        <div class="card-header bg-secondary border-0">
                           <h4 class="font-weight-semi-bold m-0">Payment</h4>
                        </div>
                           <input name="payment" value="cash" type="radio" checked required>
                           <label for="css">Cash On Delivery</label><br>
                        </div>
                    <div class="card-footer border-secondary bg-transparent">
                        {{-- <button type="" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button> --}}

                        <button type="submit"
                        class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" onclick="Swal.fire('Order added successfully')">Place Order</button>
                    </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6 ">
                  <div class="card border-secondary mb-5">
                     <div class="card-header bg-secondary border-0">
                         <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                     </div>
                     <div class="card-body">
                         <table class="table">
                         <thead>
                             <tr>
                                <th>Name</th>
                                <th >Qty</th>
                                <th>Price</th>
                             </tr>
                          </thead>
                          <tbody>
                             @foreach ($products as $item)
                             <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price }}</td>
                             </tr>
                             @endforeach
                          </tbody>
                         </table>
 
                         <hr class="mt-0">
                         <div class="d-flex justify-content-between mb-3 pt-1">
                             <h6 class="font-weight-medium">Subtotal</h6>
                             <h6 class="font-weight-medium">{{ session()->get('total')}}$</h6>
                         </div>
                         <div class="d-flex justify-content-between">
                             <h6 class="font-weight-medium">Shipping</h6>
                             <h6 class="font-weight-medium">100$</h6>
                         </div>
                     </div>
                     <div class="card-footer border-secondary bg-transparent">
                         <div class="d-flex justify-content-between mt-2">
                             <h5 class="font-weight-bold">Total</h5>
                             <h5 class="font-weight-bold">{{ session()->get('total') + 100 }}$</h5>
                         </div>
                     </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Start -->
     <div>
                @include('layouts.footer')
            </div>
      <script src="https://code.jquery.com/jquery-3.6.3.min.js"
         integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
      <script>
         $(document).ready(function() {
             $("#check-address").click(function() {

                 if ($('#check-address').is(":checked")) {

                     $('#txtname_billing').val($('#name').val());
                     $('#txtemail_billing').val($('#email').val());
                     $('#txtzip_billing').val($('#zip').val());
                     $('#txtphone_billing').val($('#phone').val());
                     $('#txtaddress1_billing').val($('#address1').val());
                     $('#txtaddress2_billing').val($('#address2').val());
                     $('#txtcountry_billing').val($('#country').val());
                     $('#txtstate_billing').val($('#state').val());

                 } else { //Clear on uncheck
                     $('#txtname_billing').val("");
                     $('#txtemail_billing').val("");
                     $('#txtzip_billing').val("");
                     $('#txtphone_billing').val("");
                     $('#txtaddress1_billing').val("");
                     $('#txtaddress2_billing').val("");
                     $('#txtcountry_billing').val("");
                     $('#txtstate_billing').val("");
                 };

             });
         });
      </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </body>
</html>
