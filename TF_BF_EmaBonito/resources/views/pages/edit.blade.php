@extends('master.main')

@section('content')
<div class="container-fluid" style="padding:0; margin:0; height:80vh;">

    <form method="post" action="{{url('/home/'.$recipe->id)}}"  style="padding: 2rem 3rem;">
        @csrf
        @method('PUT')

        <div class="banner" style="background: var(--light-color); padding:0">
            <h1>Edit recipe</h1>        
                <button type="submit" class="btn btn-secondary" style="margin-top:2rem; justify-self:flex-end">next</button>             
        </div>

        <div>
            <div class="from-group">
                <label for="title">Title</label>
                <input 
                type="text"
                    id="title" 
                    name="title" 
                    value=" {{$recipe->title}} "
                    autocomplete="Recipe Title"
                    class="form-control
                    @error('title') is-invalid @enderror"
                    required>
            </div>
            <div class="from-group">
                <label for="description">Description</label>
                <input 
                type="text"
                    id="description" 
                    name="description" 
                    value=" {{$recipe->description}} "
                    autocomplete="Recipe description"
                    class="form-control
                    @error('description') is-invalid @enderror"
                    required>
            </div>
        </div>
    </form>
        

    {{-- <div class="recipe-detail-grid">
        <div>
            <div class="recipe-lines">
                <div class="red-line"></div>
                <div class="orange-line"></div>
                <div class="yellow-line"></div>
            </div>
            <div class="scroll">
                <h3>Ingredients</h3>
                @foreach ($ingredients as $ingredient)
                <form action="{{url('/home/'.$ingredient->id)}}" method="post">
                    <input style="margin-bottom:10px;"
                    type="text"
                    id="description" 
                    name="description" 
                    value=" {{$ingredient->ingredient}} "
                    autocomplete="Recipe description"
                    class="form-control
                    @error('description') is-invalid @enderror"
                    required> 
                </form>
                @endforeach
                
                <div style="display: grid; grid-template-columns: 2fr 1fr; grid-gap:0.5rem">
                    
                    <input 
                    type="text"
                    id="ingredient" 
                    name="ingredient" 
                    autocomplete="Recipe ingredient"
                    class="form-control
                    @error('ingredient') is-invalid @enderror">
    
                    <input value="{{$recipe->id}}" 
                    type="hidden"
                    id="recipe_id" 
                    name="recipe_id" 
                    autocomplete="{{$recipe->id}}"
                    class="form-control"
                    @error('recipe_id') is-invalid @enderror">
    
                    <button type="submit" class="btn-secondary">Add Ingredient</button>
        
                </div>
                
            </div>
  
        </div>
        <div>
            <div class="recipe-lines">
                <div class="red-line"></div>
                <div class="orange-line"></div>
                <div class="yellow-line"></div>
            </div>

            <div class="scroll">
                <h3>Instructions</h3>
                @foreach ($instructions as $instruction)
                <form action="{{url('/home/'.$instruction->id)}}" method="post">
                    <input style="margin-bottom:10px;" 
                    type="text"
                    id="description" 
                    name="description" 
                    value=" {{$instruction->instruction}} "
                    autocomplete="Recipe description"
                    class="form-control
                    @error('description') is-invalid @enderror"
                    required> 
                </form>
                @endforeach

            </div>

        </div>

    </div> --}}

</div>
    
@stop
