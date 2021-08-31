@extends('master.main')

@section('content')
<div class="container-fluid" style="padding:0; margin:0">

    <div class="banner" style="background: var(--light-color)">
        <h1>{{$recipe->title}}</h1>
        <div style="display: flex; flex-direction:row;align-items:center">
            <form action="{{url('home/' . $recipe->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <button type="submit" class="btn btn-secondary" style="margin-right:2rem; justify-self:flex-end">delete recipe</button>
            </form>
            <a href="{{url('/home/'.$recipe->id.'/edit')}}" class="btn-secondary">edit recipe</a>
        </div>
    </div>

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
