@extends('master.main')

@section('content')

<div class="container-fluid" style="padding: 2rem 3rem; min-height:80vh">
    <h1>Edit Ingredients</h1>


    <form action="{{url('home/ingredient/store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="ingredient">Ingredients</label>

        <div style="display: grid; grid-template-columns: 6fr 1fr; grid-gap:1rem">
            <input 
            type="text"
             id="ingredient" 
             name="ingredient" 
             autocomplete="Recipe ingredient"
             class="form-control
             @error('ingredient') is-invalid @enderror">

             <input value="{{$recipe}}" 
             type="hidden"
             id="recipe_id" 
             name="recipe_id" 
             autocomplete="{{$recipe}}"
             class="form-control"
             @error('recipe_id') is-invalid @enderror">

             <button type="submit" class="btn-secondary">Add Ingredient</button>
        </div>
    </div>
    </form>
    <div class="form-show-preview">

        @foreach ($ingredients as $ingredient)
            <div class="item-box">
                <p>{{$ingredient->ingredient}}</p>
                <button type="submit" class="btn-delete">X</button>
            </div>
        @endforeach
    </div>


    <a href="{{ url('home/instruction/edit') }}" class="btn btn-secondary" style="margin-top:2rem; justify-self:flex-end">Next</a>

</div>
    
@endsection