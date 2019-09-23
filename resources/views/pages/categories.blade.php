@extends('layouts.master')

@section('title', $category->categoryName . ' - Book Store')

@section('positionName', $category->categoryName)

@section('content')

<div class="mt-5">
  <h2 class="h2 d-inline pr-1 pr-md-3 text-dark">{{ $category->categoryName }}</h2>
  <hr>
  <div class="row">
    @foreach($books as $book)
    <div class="col-12 col-md-3 pb-1 pb-md-3">
      <a href="{{ url('detail/' . $book->id) }}" class="text-decoration-none text-dark">
        <div class="hover-shadow card border-0" style="//width: 15rem;">
          <img src="{{ asset('images/books/matbiec.jpg') }}" class="card-img-top" alt="img">
          <div class="card-body text-center pt-0">
            <h6 class="card-title mb-1" title="{{ $book->bookname }}">{{ Str::limit($book->bookname, 30) }}</h6>
            <p class="mb-1 text-muted">{{ $book->author }}</p>
            <p class="text-muted d-inline align-top" style="text-decoration: line-through; font-size: 0.75rem">{{ $book->coverPrice }}đ</p>
            <p class="font-weight-bold d-inline pl-2 pl-md-4">{{ round((($book->price - $book->coverPrice)/$book->coverPrice)*100) }}%</p>
            <p class="text-danger font-weight-bold mb-1">{{ $book->price }}đ</p>
            <a href="#" class="btn btn-danger"><i class="fas fa-cart-plus"></i> Thêm vào giỏ</a>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>

</div>
@endsection('content')