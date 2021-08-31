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

    <button type="submit" class="btn btn-secondary" style="margin-top:2rem; justify-self:flex-end">Next</button>

    </form>

</div>

@stop