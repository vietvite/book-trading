<nav class="navbar navbar-expand-lg navbar-light bg-light pt-0 mb-4">
  <div class="dropdown">
    <button class="btn btn-sm btn-light dropdown-toggle ml-n2 mr-4 font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Thể loại
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      @foreach($categories as $category)
      <a class="dropdown-item" href="{{ url('category/' . $category->id) }}">{{ $category->categoryName }}</a>
      @endforeach
    </div>
  </div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb m-0 p-0 bg-light">
    @if(Request::is('/'))
      <li class="breadcrumb-item active" aria-current="page">Home</li>
    @elseif(Request::is('category/*'))
      <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">@yield('positionName')</li>
    @else
      <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item" aria-current="page"><a href="@yield('positionUrl')">@yield('positionName')</a></li>
      <li class="breadcrumb-item active" aria-current="page">@yield('bookname')</li>
    @endif
    </ol>
  </nav>

  <div class="ml-auto">
    <button class="btn btn-sm btn-light btn-outline-danger"><i class="fas fa-cart-arrow-down"></i> Giỏ hàng <span class="text-dark" id="cartQuantity">12</span></button>
  </div>

</nav>