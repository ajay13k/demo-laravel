<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="MSwwGbRSIm5J9uWHUNKWfxG27oSx5DgAI4UciS8K" />
  <title>MangoIT ECart</title>
  <link href="img/favicon.ico" rel="icon" />

  <link
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap"
    rel="stylesheet"
  />
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  />
  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet"
  />
  <!-- Libraries Stylesheet -->
  <link
    href="/resources/lib/owlcarousel/assets/owl.carousel.min.css"
    rel="stylesheet"
  />
  <!-- Customized Bootstrap Stylesheet -->
  <link href="/resources/css/style.css" rel="stylesheet" />
  <!-- Fonts -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
  />
  <!-- Styles -->
  <link
    rel="stylesheet"
    href="https://mango-ecart.mangoitsol.com/css/app.css"
  />
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
      from {
      }
    }
  </style>
</head>

<body>
  <div style="margin-top: 8px">
    <div class="container-fluid">@include('layouts.header')</div>

    <div>
      <div
        class="card"
        clas
        style="
          padding: 60px;
          border: none !important;
          margin: 0 auto;
          display: flex;
          justify-content: center;
        "
      >
        <div style="height: 200px; width: 200px; margin: 0 auto">
          <i
            style="
              color: #9abc66;
              font-size: 100px;
              line-height: 200px;
              margin-left: -15px;
              display: flex;
              justify-content: center;
            "
            class="checkmark"
            >✓</i
          >
        </div>
        <div style="display: flex; justify-content: center">
          <h1>Success</h1>
        </div>
        <div style="display: flex; text-align: center; justify-content: center">
          <p>
            We received your purchase request<br />
            we'll be in touch shortly!
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-secondary mb-5">
          <div class="card-header bg-secondary border-0">
            <h4 class="font-weight-semi-bold m-0">Order Total</h4>
          </div>
          <div class="card-body">
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

            <hr class="mt-0" />
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
              <h5 class="font-weight-bold">
                {{ session()->get('total') + 100 }}$
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">@include('layouts.footer')</div>
  </div>
</body>

