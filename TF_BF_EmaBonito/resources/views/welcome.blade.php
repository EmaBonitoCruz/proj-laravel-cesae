@extends('master.main')

@section('content')
<div class="container-fluid home-section-1" style="padding:0; margin:0">
        <div class="red">
            <div class="orange">
                <div class="yellow">
                    <div class="content-home row">
                        <div class="col-7">
                            <h1>THE  NEW  HOME FOR ALL OF YOUR  RECIPES</h1>
                        </div>
                        <div class="col">
                            <img src="{{ URL::to('/assets/img/flower-landing-1.png') }}" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="red-banner">
        <img src="{{ URL::to('/assets/img/cutlery-banner.png') }}" >
    </div>
@stop


