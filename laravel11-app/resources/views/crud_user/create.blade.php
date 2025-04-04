@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Đăng kí tài khoản</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUser') }}" id="registration-form" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Confirm Password" id="confirm-password" class="form-control" name="confirm_password" required>
                                </div>

                                <div class="d-flex mx-auto justify-content-end align-items-center">
                                    <a href="{{ route('login') }} " class="text-decoration-none">Đã có tài khoản rồi sao ?</a>
                                    <button type="submit" class="btn btn-dark btn-block">Đăng kí</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        document.getElementById('registration-form').addEventListener('submit', function(event) {
    
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm-password').value;

        if (password !== confirmPassword) {
        event.preventDefault();
        alert('Mật khẩu và nhập lại mật khẩu không khớp! Vui lòng thử lại.');}});
        </script>
    </main>
@endsection