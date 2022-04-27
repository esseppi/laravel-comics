@extends('template/main')
@section('title', 'Home-Comics')
@section('content')
<div class="main-home">
    <div class="hero">
        <img src="./images/jumbotron.jpg" alt="" srcset="">
        <div class="container">
            <div class="hero-tag">
                <h4>CURRENT SERIES</h4>
            </div>
        </div>
    </div>
    <div class="cards">
        <div class="container row">
            @foreach ($albums as $album)
            <div class="card">
                <div class="card-logo">
                    <img src="{{$album['thumb']}}" alt="{{$album['title']}}">
                </div>
                <div class="card-text">
                    <h3>{{$album['series']}}</h3>
                </div>
            </div>
            @endforeach
        </div>


    </div>
    <div class="bottomAdv">
        <div class="container">
            @foreach ($advItems as $adv)
            <div class="adv-content">
                  <div class="adv-photo">
                      <img class="adv-logo" src="{{$adv['image']}}" alt="" srcset="">
                  </div>
                  <h5>
                      {{$adv['text']}}
                  </h5>
            </div>

            @endforeach
        </div>

    </div>
</div>   
@endsection
    
