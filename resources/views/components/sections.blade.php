
<!-- Best sales -->
<!-- Văn học, Phát triển bản thân, Tài chính, Quản trị, Maketing -->

<div class="mt-5">
<!-- {{ print("<pre>". print_r($booksGroupByCategory, true) ."</pre>") }} -->
@foreach($booksGroupByCategory as $category)
  <a href="{{ url('/category/' . $category['category']->id) }}" class="text-decoration-none"><h2 class="h2 d-inline pr-1 pr-md-3 text-dark">{{ $category['category']->categoryName }}</h2></a>
  <a href="{{ url('/category/' . $category['category']->id) }}"><button class="btn btn-sm btn-light text-primary border-0 mt-n2">Xem thêm</button></a>
  <hr>
  <div class="row">
    @foreach($category['categoryGroup'] as $book)
    <div class="col-12 col-md-3 pb-1 pb-md-3">
      <a href="/detail/{{ $book->id }}" class="text-decoration-none text-dark">
        <div class="hover-shadow card border-0" style="//width: 15rem;">
          <img src="{{ asset('images/books/matbiec.jpg') }}" class="card-img-top" alt="img">
          <div class="card-body text-center pt-0">
            <h6 class="card-title mb-1" title="{{ $book->bookname }}">{{ Str::limit($book->bookname, 20) }}</h6>
            <p class="mb-1 text-muted">{{ $book->author }}</p>
            <p class="text-muted d-inline align-top" style="text-decoration: line-through; font-size: 0.75rem">{{ $book->coverPrice }}đ</p>
            <p class="font-weight-bold d-inline pl-2 pl-md-4">{{ round((($book->price - $book->coverPrice)/$book->coverPrice)*100) }}%</p>
            <p class="text-danger font-weight-bold mb-1">{{ $book->price }}đ</p>
            <!-- <a href="#" class="btn btn-danger">Thêm vào giỏ</a> -->
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
@endforeach

<!-- {{ print("<pre>".print_r($booksGroupByCategory,true)."</pre>") }} -->

</div>