@extends('master.main')

@section('content')

<div class="container-fluid" style="padding: 2rem 3rem; min-height:80vh">
    <h1>Profile</h1>

    <div class="container-profile">
        <div class="card-profile">
            <h3> {{$username}} </h3>
            <p> {{$email}} </p>

            @php
                $count=0;
            @endphp
            @foreach ($recipes as $recipe)
            @php
                $count++;                
            @endphp
            @endforeach
            <p> {{$count}} recipes</p>
            <a href="{{ url('profile/create') }}" class="btn-secondary">Edit Profile</a>
        </div>
    </div>
</div>

    
@stop