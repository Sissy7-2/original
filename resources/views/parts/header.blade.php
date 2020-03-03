@extends('layouts.layout')
@section('title', 'header')

@section('content')
<div class="container">
    <div class="row">
        @include('parts/logo')
        <div class="col-md-8 mx-auto">
            <h2 class="text-left">eye's project</h2>
           　<nav>
              <ul>
               <li><a class="current" href="#">Home</a></li>
               <li><a href="/profile">profile</a></li>
               <li><a href="/about">about</a></li>
               <li><a href="/details">details</a></li>
               <li><a href="/contact">contact</a></li>
               <li><a class="insta-btn" href="#">instagram</a></li>
             </ul>
             </nav>
                                    @if (count($errors) > 0)
                                    <ul>
                                        @foreach ($errors->all() as $e)
                                        <li>{{ $e }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    {{ csrf_field() }}
                                    
        </div>
    </div>
</div>
@endsection
