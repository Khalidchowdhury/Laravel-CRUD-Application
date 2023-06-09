@extends('layouts.app')

@section('main')
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="com-md-8">
                <div class="card border-0 shadow">
                    <img src="https://www.bootdey.com/img/Content/avatar/avatar6.png" alt="...">
                    <div class="card-body p-1-9 p-xl-5">
                        <div class="mb-4">
                            <h3 class="h4 mb-0">Name : {{ $auth->name }}</h3>
                            <h5 class="text-dark mt-2">Email : {{ $auth->email }} </h5>
                            <h5 class="text-dark">Phone : {{ $auth->phone }}</h5>
                        </div>
                        <a href="{{ route('store.page') }}" class="btn btn-primary">Go to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection