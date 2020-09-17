
<!doctype html>
<html lang="en">
  <head>
    <title>Lazatto @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')
    @include('frontend.layout.css')
    @stack('link')
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
  
    <div class="site-wrap"  id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
        
      {{ App\Http\Controllers\HomeController::getHeader() }}
      @yield('content')
      {{ App\Http\Controllers\HomeController::getFooter() }}
    </div>

    @include('frontend.layout.js')
    @stack('script')
  </body>
</html>