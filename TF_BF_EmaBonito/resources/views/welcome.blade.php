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
<div class="container-fluid" style="height: 75vh; background:var(--yellow); padding:2rem; display:flex;flex-direction:column; justify-content:space-around;">
    <h1 class="text-center title-home">How it works</h1>
    <div class="row">
        @component('components.cardHome',[
            'text' => 'Register to start simplifying your meal planning',
            'img'  => 'home-icon-1.png'
        ])
        @endcomponent
        @component('components.cardHome',[
            'text' => 'Add your favourite foods to your virtual recipe book',
            'img'  => 'home-icon-2.png'
        ])
        @endcomponent
        @component('components.cardHome',[
            'text' => 'Keep track of everything in your profile page',
            'img'  => 'home-icon-3.png'
        ])
        @endcomponent
    </div>
    <a class="btn-secondary" href="{{ route('register') }}" style="width: 20%;text-align:center; margin:0 auto">register to start</a>
</div>
@stop


