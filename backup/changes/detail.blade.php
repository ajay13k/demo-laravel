<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 bg-white border-b border-gray-200">
                  <div wire:id="AXouIpCWTzomaIE0HQ08" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;AXouIpCWTzomaIE0HQ08&quot;,&quot;name&quot;:&quot;productlist&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:{&quot;l344222909-0&quot;:{&quot;id&quot;:&quot;2nC5yY5hUq6MTOrYLFWK&quot;,&quot;tag&quot;:&quot;div&quot;}},&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;e9763d0f&quot;,&quot;data&quot;:{&quot;products&quot;:[]},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;products&quot;:{&quot;class&quot;:&quot;App\\Models\\Product&quot;,&quot;id&quot;:[57,58,59,62,63,64,65,68],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;}}},&quot;checksum&quot;:&quot;ace6be00e896f3bfcd6c8eeb8044746ed747b489fed2bbd172b87c1830d32999&quot;}}">
                     <main class="my-2">
                        <div class="container-fluid">
                           <div>
                              @include('layouts.header')
                           </div>
                           <div class="row align-items-center py-3 px-xl-5">
                              <div class="col-lg-3 d-none d-lg-block">
                                 <a href="" class="text-decoration-none">
                                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                                 </a>
                              </div>
                              <div class="col-lg-6 col-6 text-left">
                                 <!-- <form action="">
                                    <div class="input-group">
                                       <input type="text" class="form-control" placeholder="Search for products">
                                       <div class="input-group-append">
                                          <span class="input-group-text bg-transparent text-primary">
                                             <i class="fa fa-search"></i>
                                          </span>
                                       </div>
                                    </div>
                                    </form> -->
                              </div>
                              <div class="col-lg-3 col-6">
                                 @auth
                                 @include('layouts.navigation')
                                 @else
                                 @include('layouts.gurestnavbar')
                                 @endauth
                              </div>
                           </div>
                           <div class="container">
                              <div class="row justify-content-center mt-5">
                                 <div class="col-sm-6 " style="text-align: center">
                                    <img src="{{ asset('storage/media/' . $product->image) }}" alt="First slide">
                                    <div>
                                       <h4>Name:{{ $product->name }}</h4>
                                       <h5>Price:{{ $product->price }}$</h5>
                                       <h5>Description:{{ $product->description }}</h5>
                                    </div>
                                    <div>
                                       <form action="/cart" method="POST">
                                          <input type="hidden" name="product_id" value="{{$product->id}}">
                                          @csrf
                                          Quantity : <input style="width: 60px" type="number" min=1
                                             name="qty" value="1">
                                          <button onclick="Swal.fire('Product added to the cart successfully')" type="submit" class='btn btn-primary'>Add To
                                          Cart</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div>
                              @include('layouts.footer')
                           </div>
                        </div>
                     </main>
                  </div>
               </div>
            </div>
         </main>
      </div>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   </body>
</html>
