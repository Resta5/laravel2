@extends('layouts.home')
@section('judul')
Halaman Index
@endsection

@section('content')
<a class="btn btn-primary btn-lg" href="{{ route('contact')}}">Contact</a>
<a class="btn btn-primary btn-lg" href="{{ route('about')}}">About</a>
<a class="btn btn-primary btn-lg" href="{{ route('post')}}">Post</a>
@endsection
