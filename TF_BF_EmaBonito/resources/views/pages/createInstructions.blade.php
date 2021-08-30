@extends('master.main')

@section('content')

<div class="container-fluid" style="padding: 2rem 3rem; min-height:80vh">
    <h1>Add Instructions</h1>

    <form action="{{url('home/instruction/store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="ingredient">Instruction</label>

        <div style="display: grid; grid-template-columns: 6fr 1fr; grid-gap:1rem">
            <input 
            type="text"
             id="instruction" 
             name="instruction" 
             autocomplete="Recipe instruction"
             class="form-control
             @error('instruction') is-invalid @enderror">

             <input value="{{$recipe_id}}" 
             type="hidden"
             id="recipe_id" 
             name="recipe_id" 
             autocomplete="{{$recipe_id}}"
             class="form-control"
             @error('recipe_id') is-invalid @enderror">

             <button type="submit" class="btn-secondary">Add Instruction</button>
        </div>
    </div>
    </form>
    <div class="form-show-preview">

        @foreach ($instructions as $instruction)
            <p>{{$instruction->instruction}}</p>
        @endforeach
    </div>


    <a href="{{ url('home/'.$recipe_id) }}" class="btn btn-secondary" style="margin-top:2rem; justify-self:flex-end">Finish</a>

</div>
    
@endsection