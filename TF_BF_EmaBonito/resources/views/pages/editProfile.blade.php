@extends('master.main')

@section('content')

<div class="container-fluid" style="padding: 2rem 3rem; min-height:80vh">
    <h1>Edit Profile</h1>

    <div class="container-profile">
        <div class="card-profile">

            <form method="post" action="{{url('profile/'.$user_id)}}" >
                @csrf
                @method('PUT')
            
                <div class="from-group">
                    <label for="title">Name</label>
                    <input 
                    type="text"
                     id="name" 
                     name="name" 
                     value="{{$username}}"
                     autocomplete="name"
                     class="form-control
                     @error('name') is-invalid @enderror"
                     required>
                </div>
            
                <div class="from-group">
                    <label for="email">Email</label>
                    <input 
                    type="text"
                     id="email" 
                     name="email" 
                     value="{{$email}}"
                     autocomplete="Email"
                     class="form-control
                     @error('email') is-invalid @enderror"
                     required>
                </div>
            
                <input value="{{$user_id}}" 
                type="hidden"
                id="user_id" 
                name="user_id" 
                autocomplete="{{$user_id}}"
                class="form-control"
                @error('user_id') is-invalid @enderror">
            
                <button type="submit" class="btn btn-secondary" style="margin-top:2rem; justify-self:flex-end">save changes</button>
            
                </form>

        </div>
    </div>
</div>

    
@stop