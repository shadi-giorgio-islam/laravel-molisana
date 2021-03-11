<header>
  <div id="logo">
    <img src="{{ asset('img/logo.png') }}" alt="logo">
  </div>
  <nav>
    <ul>
      <li class="{{ (Request::route()->getName() == 'home') ? 'active' : ''}}"><a href="{{ route('home')}}">Home</a></li>
      <li class="{{ (Request::route()->getName() == 'products') ? 'active' : ''}}"><a href="{{ route('products')}}">Products</a></li>
      <li class="{{ (Request::route()->getName() == 'news') ? 'active' : ''}}"><a href="{{ route('news')}}">News</a></li>
    </ul>
  </nav>
</header>
