<html>
<link rel="stylesheet" href="{{asset('assets/css/user/register.css')}}">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<form action="#" class="div-form">
    <input type="text" placeholder="nhapten" name="username" id="useName">
    <label>Email</label>

    <input type="" placeholder="nhap email" name="email">
    <label>Address</label>

    <input type="text" placeholder="nahp dia chi nha"  name="address">
    <label>Phonenumber</label>

    <input type="text" placeholder="nhapsodienthoai" name="phonenumber">
    <label>Password</label>

    <input type="password" placeholder="nhapmatkhau" name="password">
    <label>Repeat password</label>
    <button id="submit"> Dang ky</button>
</form>

<script>
    var buttonSubmit = document.getElementById("submit");
    var userName = document.getElementById("useName").textContent;
    console.log(userName)
    var email = document.getElementById("useName").value;
    var address = document.getElementById("useName").value;
    var phonenumber = document.getElementById("useName").value;
    var password = document.getElementById("useName").value;
    document.addEventListener("DOMContentLoaded", function () {
        buttonSubmit.addEventListener("click", function () {
            axios.post("http://localhost:8000/api/register", {
                    username: userName,
                    email: email,
                    address: address,
                    phone: phonenumber,
                    password: password,
                })
                .then(response => {

                })
                .catch(error => {

                })
        })
    })
</script>
</html>

