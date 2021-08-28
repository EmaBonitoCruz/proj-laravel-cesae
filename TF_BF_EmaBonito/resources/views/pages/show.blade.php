@extends('master.main')

@section('content')
<div class="container-fluid" style="padding:0; margin:0">

    <div class="banner" style="background: var(--light-color)">
        <h1>{{$recipe->title}}</h1>
        <a href="" class="btn-secondary">edit recipe</a>
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
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem, ipsum dolor.</li>
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
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi maxime labore ad architecto beatae esse et quis sint dignissimos minima obcaecati accusamus, modi officiis alias delectus laudantium vero quam amet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi maxime labore ad architecto beatae esse et quis sint dignissimos minima obcaecati accusamus, modi officiis alias delectus laudantium vero quam amet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi maxime labore ad architecto beatae esse et quis sint dignissimos minima obcaecati accusamus, modi officiis alias delectus laudantium vero quam amet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi maxime labore ad architecto beatae esse et quis sint dignissimos minima obcaecati accusamus, modi officiis alias delectus laudantium vero quam amet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi maxime labore ad architecto beatae esse et quis sint dignissimos minima obcaecati accusamus, modi officiis alias delectus laudantium vero quam amet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi maxime labore ad architecto beatae esse et quis sint dignissimos minima obcaecati accusamus, modi officiis alias delectus laudantium vero quam amet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi maxime labore ad architecto beatae esse et quis sint dignissimos minima obcaecati accusamus, modi officiis alias delectus laudantium vero quam amet.</li>
                </ol>

            </div>

        </div>

    </div>

</div>
    
@stop
