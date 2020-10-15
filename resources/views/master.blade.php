{{-- @php
    if(session()->has("locale")){
      App::setLocale(session()->get("locale"));
    }
@endphp --}}

<!doctype html>
<html lang="{{App::getLocale()}}" dir="@lang('messages.dir')">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @lang('messages.bootstrap')
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Souq</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home"> @lang('messages.Home') <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/brand">@lang('messages.Brand')</a>
            </li>  <li class="nav-item">
              <a class="nav-link" href="/users">@lang('messages.Users')</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{__("messages.Categories")}} 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/category/create">@lang('messages.Add New Category')</a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/category">@lang('messages.Show All Categories')</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('data.Products')
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/product/create">@lang('messages.Add New Product')</a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/product">@lang('messages.Show All Products') </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('messages.Suppliers')
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/supplier/create">@lang('messages.Add New Supplier')</a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/supplier">@lang('messages.Show All Suppliers')</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacts" tabindex="-1" aria-disabled="true">@lang('messages.Contact Us') </a>
            </li>
          </ul>
      
          <form class="form-inline my-2 my-lg-0" method="POST" action="/lang">
            @csrf
            <button class="btn btn-outline-primary my-2 my-sm-0" name="l" value="en" type="submit">English</button>
            &nbsp;
            <button class="btn btn-outline-success my-2 my-sm-0" name="l" value="ar" type="submit">اللغه العربية</button>
          </form>
        </div>
      </nav>
 
      @yield("content")
      
      <footer class="ml-5 mb-2">
        <hr>
        @section('links')
        <a href="#" class="btn-link">Google</a>
        @show

      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>