@extends('master.main')

@section('content')
<div class="container-fluid" style="padding:0; margin:0">

    <form action="{{url('/home/'.$recipe->id)}}" method="post" style="padding: 2rem 3rem;">
        @csrf
        <div class="banner" style="background: var(--light-color); padding:0">
            <h1>Edit recipe</h1>
            <div>
                <a {{url('/home/'.$recipe->id)}} class="btn btn-secondary" style="margin-top:2rem; justify-self:flex-end">delete recipe</a>
                <button type="submit" class="btn btn-secondary" style="margin-top:2rem; justify-self:flex-end">save changes</button>
            </div>
                            
        </div>

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
    </form>
        

    <div class="recipe-detail-grid">
        <div>
            <div class="recipe-lines">
                <div class="red-line"></div>
                <div class="orange-line"></div>
                <div class="yellow-line"></div>
            </div>
            <div class="scroll">
                <h3>Ingredients</h3>
                <ul>
                    @foreach ($ingredients as $ingredient)
                        
                    <li> {{$ingredient->ingredient}}</li>
                    @endforeach

                </ul>
            </div>
  
            {{-- @foreach ($ingredients as $ingredient)
                {{$ingredient}}
            @endforeach --}}
        </div>
        <div>
            <div class="recipe-lines">
                <div class="red-line"></div>
                <div class="orange-line"></div>
                <div class="yellow-line"></div>
            </div>

            <div class="scroll">
                <h3>Instructions</h3>
                <ol>
                    @foreach ($instructions as $instruction)
                        
                    <li> {{$instruction->instruction}}</li>
                    @endforeach
                </ol>

            </div>

        </div>

    </div>

</div>
    
@stop
