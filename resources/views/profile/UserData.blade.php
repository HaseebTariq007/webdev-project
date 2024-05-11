@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-center">User Profile</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3 mb-3">
            <div class="card">
                <div class="card-header">
                    <h3>User Information</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Name:</strong>
                        </div>
                        <div class="col-md-6">
                            {{ $user->firstname }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Email:</strong>
                        </div>
                        <div class="col-md-6">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>User Name:</strong>
                        </div>
                        <div class="col-md-6">
                            {{ $user->username }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Phone:</strong>
                        </div>
                        <div class="col-md-6 ">
                            {{ $user->mobileNumber }}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mb-5">
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Return to Dashboard</a>
    </div>
</div>
@endsection