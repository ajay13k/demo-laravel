<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
   integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
    <a style="padding: 10px" href="{{ URL::previous() }}">Go Back</a>
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
         <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
               <div class="d-inline-flex align-items-center">
                  <a class="text-dark" href="">FAQs</a>
                  <span class="text-muted px-2">|</span>
                  <a class="text-dark" href="">Help</a>
                  <span class="text-muted px-2">|</span>
                  <a class="text-dark" href="">Support</a>
               </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
               <div class="d-inline-flex align-items-center">
                  <a class="text-dark px-2" href="">
                  <i class="fab fa-facebook-f"></i>
                  </a>
                  <a class="text-dark px-2" href="">
                  <i class="fab fa-twitter"></i>
                  </a>
                  <a class="text-dark px-2" href="">
                  <i class="fab fa-linkedin-in"></i>
                  </a>
                  <a class="text-dark px-2" href="">
                  <i class="fab fa-instagram"></i>
                  </a>
                  <a class="text-dark pl-2" href="">
                  <i class="fab fa-youtube"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row ">
               <div class="col-md-6 ">
                  <form method="POST" action="/orderplace">
                     @csrf
                     <div class="form-group">
                        <label for="name">Full Name :</label>
                        <input placeholder="enter your fullname"
                           value="" name="name"
                           id="name" class="form-control" />
                     </div>
                     <div class="form-group">
                        <label for="email">Email :</label>
                        <input placeholder="enter your email"
                           value="" name="email"
                           id="email" class="form-control" />
                     </div>
                     <div class="row">
                        <h2>Billing Address:-</h2>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">Address1 :</label>
                              <input placeholder="enter your address1"
                                 id="address1" name="address1"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">Address2 :</label>
                              <input placeholder="enter your address2"
                                 id="address2" name="address2"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="country">Country :</label>
                              <input placeholder="enter your country"
                                 id="country" name="country"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="state">State :</label>
                              <input placeholder="enter your state"
                                 id="state" name="state"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="text">Zip :</label>
                              <input type="text" placeholder="zip code"
                                 id="zip" name="zip"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="text">Phone :</label>
                              <input type="tel" placeholder="contect number"
                                 id="phone" name="phone"
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
                                 name="txtaddress1_billing"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">Address2 :</label>
                              <input placeholder="enter your address2"
                                 id="txtaddress2_billing"
                                 name="txtaddress2_billing"
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
                                 name="txtcountry_billing"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="state">State :</label>
                              <input placeholder="enter your state"
                                 id="txtstate_billing" name="txtstate_billing"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="text">Zip :</label>
                              <input type="tel" placeholder="zip"
                                 id="txtzip_billing" name="txtzip_billing"
                                 class="form-control" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="text">Phone :</label>
                              <input type="tel" placeholder="contect number"
                                 id="txtphone_billing" name="txtphone_billing"
                                 class="form-control" />
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="">Payment Method :</label><br>
                           <input name="payment" value="cash" type="radio" checked="">
                           <label for="css">Cash On Delivery</label><br>
                        </div>
                        <div style="margin-left: 100px">
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
      <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
         <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
               <a href="" class="text-decoration-none">
                  <h1 class="mb-4 display-5 font-weight-semi-bold"><span
                     class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper
                  </h1>
               </a>
               <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no
                  sit erat lorem et magna ipsum dolore amet erat.
               </p>
               <p class="mb-2"><i
                  class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street,
                  New York, USA
               </p>
               <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><a
                  href="/cdn-cgi/l/email-protection" class="__cf_email__"
                  data-cfemail="1a73747c755a7f627b776a767f34797577">[email&#160;protected]</a>
               </p>
               <p class="mb-0"><i
                  class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890
               </p>
            </div>
            <div class="col-lg-8 col-md-12">
               <div class="row">
                  <div class="col-md-4 mb-5">
                     <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                     <div class="d-flex flex-column justify-content-start">
                        <a class="text-dark mb-2" href="index.html"><i
                           class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-dark mb-2" href="shop.html"><i
                           class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-dark mb-2" href="detail.html"><i
                           class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-dark mb-2" href="cart.html"><i
                           class="fa fa-angle-right mr-2"></i>Shopping
                        Cart</a>
                        <a class="text-dark mb-2" href="checkout.html"><i
                           class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-dark" href="contact.html"><i
                           class="fa fa-angle-right mr-2"></i>Contact Us</a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-5">
                     <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                     <div class="d-flex flex-column justify-content-start">
                        <a class="text-dark mb-2" href="index.html"><i
                           class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-dark mb-2" href="shop.html"><i
                           class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-dark mb-2" href="detail.html"><i
                           class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-dark mb-2" href="cart.html"><i
                           class="fa fa-angle-right mr-2"></i>Shopping
                        Cart</a>
                        <a class="text-dark mb-2" href="checkout.html"><i
                           class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-dark" href="contact.html"><i
                           class="fa fa-angle-right mr-2"></i>Contact Us</a>
                     </div>
                  </div>
                  <div class="col-md-4 mb-5">
                     <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                     <form action="">
                        <div class="form-group">
                           <input type="text"
                              class="form-control border-0 py-4"
                              placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                           <input type="email"
                              class="form-control border-0 py-4"
                              placeholder="Your Email" required="required" />
                        </div>
                        <div>
                           <button class="btn btn-primary btn-block border-0 py-3"
                              type="submit">Subscribe Now</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
               <p class="mb-md-0 text-center text-md-left text-dark">
                  &copy; <a class="text-dark font-weight-semi-bold"
                     href="#">Your Site Name</a>. All Rights Reserved.
                  Designed
                  by
                  <a class="text-dark font-weight-semi-bold"
                     href="https://htmlcodex.com">HTML Codex</a>
               </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
               <img class="img-fluid" src="/resources/img/payments.png"
                  alt="">
            </div>
         </div>
      </div>
      <!-- Footer End -->
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
   </body>
</html>

