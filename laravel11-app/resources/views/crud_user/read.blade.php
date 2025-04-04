@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="d-gird mx-auto text-center border border-dark p-3 my-4">
                <div class="mb-3 fw-bold">Man hinh chi tiet</div>
                <div>Ten: {{$user->name}}</div>
                <div>Email: {{$user->email}}</div>
                <div>TKGitHub: {{$user->tkgithub}}</div>
                <div>Like: {{$user->like}}</div>
                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a>
            </div>
        </div>
    </main>
@endsection