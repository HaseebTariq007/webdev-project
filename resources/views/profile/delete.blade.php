@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                <strong>Warning:</strong> Deleting your account is irreversible. All your data will be lost.
            </div>
            <form action="{{ route('profile.delete') }}" method="POST">
                @csrf
                <div class="text-center mb-5">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
