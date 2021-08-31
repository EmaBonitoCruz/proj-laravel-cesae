@extends('master.main')

@section('content')
<div class="container-fluid" style="padding:0; margin:0">
    <div class="banner">
        <h1 class="light-title">Recipes</h1>
        <a href="{{ url('home/create') }}" class="btn-secondary">add recipe</a>
    </div>

    <div class="row" style="padding: 2rem 3rem;">        
        <h3>HIGHLIGHTED RECIPES</h3>
    </div>
    
    <div class="row" style="padding:1rem 2rem">
  
        @for ($i = 0; $i < count($recipes); $i++)
            @if ($i < 2)
                @component('components.recipeCardHighlight', [
                    'slug'        => $recipes[$i]->id,
                    'title'       => $recipes[$i]->title,
                    'description' => $recipes[$i]->description
                ])    
                @endcomponent
            @elseif($i==2)
                </div>
                <div class="red-banner">
                    <img src="{{ URL::to('/assets/img/cutlery-banner.png') }}" >
                </div>  
                <div class="row-recipes" style="padding:1rem 2rem">
            @else
                @component('components.recipeCard', [
                    'slug'        => $recipes[$i]->id,
                    'title'       => $recipes[$i]->title,
                    'description' => $recipes[$i]->description
                ])    
                @endcomponent
            @endif
        @endfor
        {{-- @foreach ($recipes as $recipe)


        
            @component('components.recipeCard', [
                'slug'        => $recipe->id,
                'title'       => $recipe->title,
                'description' => $recipe->description
            ])    
            @endcomponent
        
        @endforeach --}}

    </div>


    

    {{-- <div class="row" style="padding:1rem 3rem">


      
        @component('components.recipeCardHighlight')    
        @endcomponent
        @component('components.recipeCardHighlight')    
        @endcomponent

    </div>

   --}}


</div>
@stop


