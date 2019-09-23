@extends('layouts.master')

@section('title', 'Book Store - Trang chủ')

@section('content')

<!-- Flash sale -->
@include('components.flashsale')

<!-- Bookshelf by categories -->
@include('components.sections')

@endsection