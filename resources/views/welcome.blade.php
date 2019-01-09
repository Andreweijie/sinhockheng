@extends('layout')

@section('header-content')
<div class="col">
    <img src="https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/car-256.png">
    <h1 class="display-1 text-center">Sin Hock Heng</h1>
    <h2 class="display-4 text-center">Mission Statement</h2>
</div>
@endsection

@section('title')
<strong>Why</strong> Us?
@endsection

@section('content')
<div class="container welcome">
    <div class='row'>
        <div class="col-sm">
            <div>
                <img src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Old-Car-2-256.png">
            </div>
        </div>
        <div class="col-sm">
            <h1 class="text-center">Feature Number 1</h1>
            <p class="text-center">blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
                blah
                blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
                blah blah</p>
            <button class="btn">Learn More</button>
        </div>
    </div>
    <div class='row'>
        <div class="col-sm">
            <div>
                <img src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Car-Jumper-256.png">
            </div>
        </div>
        <div class="col-sm text-center">
            <h1>Feature Number 2</h1>
            <p>blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
                blah
                blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
            <button class="btn">Learn More</button>
        </div>
    </div>
    <div class='row'>
        <div class="col-sm">
            <div>
                <img src="https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/carwheel-256.png">
            </div>
        </div>
        <div class="col-sm text-center">
            <h1>Feature Number 3</h1>
            <p>blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
                blah
                blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
            <button class="btn">Learn More</button>
        </div>
    </div>
    <div class="row location text-center">
        <div class="col-sm">
            <h1>Where are we?</h1>
        </div>
        <div class="col-sm">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed/v1/place?q=sin%20hock%20heng&key=AIzaSyD7xasDyE0566hq0-a2YsIL_qofPridsC8"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
