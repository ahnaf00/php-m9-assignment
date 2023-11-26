<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  @include('frontend.includes.header')
</head>

<body class="blog-author">
  @include('frontend.includes.navbar')

  <header>
    <div class="page-header min-height-400" style="background-image: url('{{ asset('frontend/assets') }}/img/city-profile.jpg');" loading="lazy">
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
  </header>
  @yield('body-content')

  @include('frontend.includes.footer')
  @include('frontend.includes.script')
</body>

</html>
