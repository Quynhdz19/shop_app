<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('assets/css/user/login.css')}}">
</head>
<body>
<div class="form form-login">
    <h2>Login</h2>
    <form class="form-login" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        @if(\Session::has('status'))
            <div class="status">
                {!!\Session::get('status')!!}
            </div>
        @endif
        <label>Nhập email</label>
        <input type="email" placeholder="Nhập email...." name="email">
        <label>Nhập password</label>
        <input type="password" placeholder="Nhập password...." name="password">
        <button class="submit-login" type="submit">Đăng Nhập</button>
        <p>Bạn chưa có tài khoản <a href="register">hãy đăng ký !</a></p>
    </form>
</div>
</body>
</html>
