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
        <div class="container">
            @foreach ($albums as $album)
            <div class="card">
                <div class="card-logo">
                    <img src="{{$album['thumb']}}" alt="{{$album['title']}}">

                </div>
                <div class="card-text">
                    <h3>{{$album['title']}}</h3>
                </div>
            </div>
            @endforeach
        </div>


    </div>
    <div class="bottom-adv">

    </div>

</div>
    
@endsection
    
