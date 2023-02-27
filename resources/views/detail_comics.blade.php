@extends('layouts.app')

@section('content')
<div class="jumbo">
    <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</div>
<div class="blue-band">
</div>
<div class="container-single-card">
    <div class="col-80">
        <div class="single-card">
            <img src="{{$single['thumb']}}" alt="{{$single['title']}}">
        </div>
        <div class="comic-title">
            <h1>{{$single['title']}}</h1>
        </div>
        <div class="price-section">
            <div>
               U.S.-Price {{$single['price']}}
            </div>
            <div>
                Available
            </div>
        </div>
        <div class="description">
            {{$single['description']}}
        </div>
    </div>
    <div class="col-20">
        <div class="advertise">
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
        </div>
    </div>
</div>
<div>
    <h3>Art By {{$single['artists']}}</h3>
    <h3>ciao{{$single['writers']}}</h3>
</div>


@endsection