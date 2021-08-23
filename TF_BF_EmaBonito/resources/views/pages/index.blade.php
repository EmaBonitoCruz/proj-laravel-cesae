@extends('master.main')

@section('content')
<div class="container-fluid" style="padding:0; margin:0">
    <div class="banner">
        <h1 class="light-title">Recipes</h1>
        <a href="" class="btn-secondary">add recipe</a>
    </div>

    <div class="row" style="padding: 2rem 3rem;">
        <h3>HIGHLIGHTED RECIPES</h3>
    </div>

    <div class="row" style="padding:1rem 3rem">

        @component('components.recipeCardHighlight')    
        @endcomponent

        @component('components.recipeCardHighlight')    
        @endcomponent

    </div>

    <div class="red-banner">
        <img src="{{ URL::to('/assets/img/cutlery-banner.png') }}" >
    </div>    

    <div class="row">
        
    </div>

</div>
@stop


