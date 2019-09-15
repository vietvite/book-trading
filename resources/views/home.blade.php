@extends('layouts.master')

@section('title', 'Book Store - Trang chủ')

@section('content')

<!-- Flash sale -->
@include('flashsale')

<!-- Bookshelf by categories -->
@include('categories')

@endsection