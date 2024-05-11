@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <h1 class="text-center mt-5 mb-3">Update Profile</h1>
    <div class="col-md-6"> 
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="firstname" class="form-label">Name:</label>
                <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" value="{{ $user->username }}" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" value="{{ $user->password }}" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="mobileNumber" class="form-label">Phone:</label>
                <input type="tel" name="mobileNumber" value="{{ $user->mobileNumber }}" class="form-control" >
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary mb-3 ">Update Profile</button></div>
        </form>
        
    </div>
</div>
</div>
@endsection
