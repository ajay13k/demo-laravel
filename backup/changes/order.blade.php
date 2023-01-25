<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
   integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
      <link rel="stylesheet" href="https://mango-ecart.mangoitsol.com/css/app.css">
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
         <div class="container" style="margin-top:20px">
            <div class="row ">
               <div class="col-md-6 ">
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
                        <h2>Billing Address:-</h2>
                     </div>
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
                     <h1>Shipping Details:-</h1>
                     <input type="checkbox" id="check-address" name="sameadr">
                     Shipping address same as billing
                     <div class="row">
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
                           <label for="">Payment Method :</label><br>
                           <input name="payment" value="cash" type="radio" required>
                           <label for="css">Cash On Delivery</label><br>
                        </div>
                        <div style="margin-left: 100px">
                           <a style="padding: 10px" href="{{ URL::previous() }}">Go Back</a>
                           <button type="submit"
                              class="btn btn-success" onclick="Swal.fire('Order added successfully')">Continue to
                           checkout</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6 ">
                  <div class="card">
                     <div class="card-body">
                        <h6>Order Details</h6>
                        <hr>
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Qty</th>
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
                        <hr>
                        <table class="table">
                            <tbody>
                               <tr>
                                  <td>Tax</td>
                                  <td>0$</td>
                               </tr>
                               <tr>
                                  <td>Delivery Charge</td>
                                  <td>100</td>
                               </tr>
                               <tr>
                                  <td>Total Amount</td>
                                  <td>{{ session()->get('total') + 100 }}$</td>
                               </tr>
                            </tbody>
                         </table>
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
