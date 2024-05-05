<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('assets/css/user/register.css')}}">
</head>
<body>
<div class="form form-register">
    <h3 class="title">Register</h3>
    <form method="post" action="#" class="div-form">
        @csrf <!-- {{ csrf_field() }} -->
        <label>User name</label>
            <input type="text" placeholder="nhapten" name="username">
        <label>Email</label>
            <input type="email" placeholder="nhap email" name="email">
        <label>Address</label>
            <input type="text" placeholder="nahp dia chi nha"  name="address">
        <label>Phonenumber</label>
            <input type="text" placeholder="nhapsodienthoai" name="phonenumber">
        <label>Password</label>
            <input type="password" placeholder="nhapmatkhau" name="password">
        <label>Repeat password</label>
            <input type="password" placeholder="nhaplaimatkhau" name="passwordrepeated">
        <button class="submit" type="submit"> Dang ky</button>
    </form>

</div>
</body>
</html>
