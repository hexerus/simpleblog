@extends('layout.app')

@section('content')
    <div class="container my-5 text-center">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">Home Page</h1>
                <p class="lead">Welcome to SimpleBlog</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4 mb-lg-3">
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Login</button>
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Sign-up</button>
                </div>
            </div>
        </div>
    </div>
@endsection