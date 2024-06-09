<html>

<div id="show_info">
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<button id="button_get_info">Lấy thông tin email</button>
<script>
   // document -> html -> div, h, li, ul
    var buttonGetInfor = document.getElementById("button_get_info");
    var showInfor = document.getElementById("show_info");


   document.addEventListener('DOMContentLoaded', function () {
       buttonGetInfor.addEventListener("click", function () {
          axios.get("http://localhost:8000/api/email")
              .then(response => {
                  var result = response.data;
                  console.log(response.data)
                  result.forEach(item => {
                      // khởi tạo thẻ html
                      var li = document.createElement('li');
                      // gán nội dung cho thẻ
                      li.textContent = item.email;
                      // hiển thị thẻ vào thẻ div cha
                      showInfor.appendChild(li);
                  })


              })
              .catch(error => {
                  console.log(error)
              })
       });
   });

</script>

</html>

