@extends('master.main')

@section('content')


<div class="container-fluid" style="padding: 2rem 3rem; min-height:80vh">
    <h1>New Recipe</h1>

    <form action="{{url('home')}}" method="post">
    @csrf

    <div class="from-group">
        <label for="title">Title</label>
        <input 
        type="text"
         id="title" 
         name="title" 
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
         autocomplete="Recipe description"
         class="form-control
         @error('description') is-invalid @enderror"
         required>
    </div>

    <input value="{{$user_id}}" 
    type="hidden"
    id="user_id" 
    name="user_id" 
    autocomplete="{{$user_id}}"
    class="form-control"
    @error('user_id') is-invalid @enderror">


    {{-- <div class="from-group">
        <label for="ingredient">Ingredients</label>
        
        @php
        if(isset($_POST['ingredient'])) {
            // addIngredient();
            $new = $_POST['ingredient'];
            array_push($ingredients, $new);
        }

        // function addIngredient(){
        // }
        
        @endphp
        <div style="display: grid; grid-template-columns: 6fr 1fr; grid-gap:1rem">
            <input 
            type="text"
             id="ingredient" 
             name="ingredient" 
             autocomplete="Recipe ingredient"
             class="form-control
             @error('ingredient') is-invalid @enderror"
             >

             <button name="add-ingredient" class="btn-secondary">Add Ingredient</button>
            
              @php
                array_push($ingredients, 'cenoura','cereais');    
              @endphp  
        </form>

    </div>

    <div class="form-show-preview">
        @foreach ($ingredients as $ingredient)
            <p>{{$ingredient}}</p>
        @endforeach

    </div>
    
    <div class="from-group">
        <label for="instruction">Instructions</label>
        <div style="display: grid; grid-template-columns: 6fr 1fr; grid-gap:1rem">
            <input 
            type="text"
             id="instruction" 
             name="instruction" 
             autocomplete="Recipe instruction"
             class="form-control
             @error('instruction') is-invalid @enderror">
             <button class="btn-secondary">Add Instruction</button>
             @php
             array_push($instructions, 'instrução numero um','instrução numero dois');    
           @endphp  
        </div>
    </div>
    <div class="form-show-preview" style="flex-direction: column">
        @foreach ($instructions as $instruction)
        <p>{{$instruction}}</p>
    @endforeach
    </div> --}}


    <button type="submit" class="btn btn-secondary" style="margin-top:2rem; justify-self:flex-end">Next</button>

    </form>

</div>

@stop