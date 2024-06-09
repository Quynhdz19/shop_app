<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">

</head>
<body>
    <div class="menu">
        <button class="sub_menu " id="iphone">
            iphone
        </button>
        <button class="sub_menu" id="samsung">
            samsung
        </button>
        <button class="sub_menu" id="macbook">
            macbook
        </button>
        <button class="sub_menu" id="oppo">
            oppo
        </button>
    </div>
    <div class="container" id ='content'>
        <div id="index-content" >
        </div>

        </div>
        <div id="iphone-content" >
            <div class ='box_component'>
                <img src="{{asset('assets/img/iphone15.jpg')}}">
                <h2>iphone 15</h2>
                <p>15.000.000</p>

            </div>
        </div>
        <div id="macbook-content">
            <div class ='box_component'>
                <img src="{{asset('assets/img/iphone15.jpg')}}">
                <h2>macbook 15</h2>
                <p>15.000.000</p>

            </div>
        </div>
        <div id="samsung-content">
            <div class ='box_component'>
                <img src="{{asset('assets/img/iphone15.jpg')}}">
                <h2>samsung 15</h2>
                <p>15.000.000</p>

            </div>
        </div>
        <div id="oppo-content">
            <div class ='box_component'>
                <img src="{{asset('assets/img/iphone15.jpg')}}">
                <h2>oppo 15</h2>
                <p>15.000.000</p>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>


    var iphone=document.getElementById('iphone');
    var samsung=document.getElementById('samsung');
    var macbook=document.getElementById('macbook');
    var oppo=document.getElementById('oppo');

    var index_content=document.getElementById('index-content');
    var iphone_content=document.getElementById('iphone-content');
    var samsung_content=document.getElementById('samsung-content');
    var macbook_content=document.getElementById('macbook-content');
    var oppo_content=document.getElementById('oppo-content');

    var inner_content =document.getElementById('index-content');


    samsung_content.classList.add("display_none");
    macbook_content.classList.add("display_none");
    iphone_content.classList.add("display_none");
    oppo_content.classList.add("display_none");

            let str='';
            axios.get("http://localhost:8000/api/product")
                .then(response => {
                    var result = response.data;
                    console.log(response.data)
                    result.forEach(item => {
                        str+=` <div class ='box_component'>
                                    <img src="${item.src_img}">
                                    <h2>${item.nameproduct}</h2>
                                    <p>${item.price}</p>
                                </div>`
                    });
                    inner_content.innerHTML=str;


                })
                .catch(error => {
                    console.log(error)
                });



    document.addEventListener('DOMContentLoaded',function(){
        iphone.addEventListener('click',function(){
            iphone.classList.add('active');
            samsung.classList.remove('active');
            oppo.classList.remove('active');
            macbook.classList.remove('active');
            ////
            index_content.classList.add('display_none');
            samsung_content.classList.add('display_none');
            oppo_content.classList.add('display_none');
            macbook_content.classList.add('display_none');

            iphone_content.classList.remove('display_none');


        });
    });
    document.addEventListener('DOMContentLoaded',function(){
        samsung.addEventListener('click',function(){
            samsung.classList.add('active');
            iphone.classList.remove('active');
            oppo.classList.remove('active');
            macbook.classList.remove('active');
            ///
            index_content.classList.add('display_none');
            iphone_content.classList.add('display_none');
            oppo_content.classList.add('display_none');
            macbook_content.classList.add('display_none');

            samsung_content.classList.remove('display_none');

        });
    });
    document.addEventListener('DOMContentLoaded',function(){
        macbook.addEventListener('click',function(){
            macbook.classList.add('active');
            samsung.classList.remove('active');
            oppo.classList.remove('active');
            iphone.classList.remove('active');

            index_content.classList.add('display_none');
            samsung_content.classList.add('display_none');
            oppo_content.classList.add('display_none');
            iphone_content.classList.add('display_none');

            macbook_content.classList.remove('display_none');

        });
    });
    document.addEventListener('DOMContentLoaded',function(){
        oppo.addEventListener('click',function(){
            oppo.classList.add('active');
            samsung.classList.remove('active');
            iphone.classList.remove('active');
            macbook.classList.remove('active');

            index_content.classList.add('display_none');
            samsung_content.classList.add('display_none');
            iphone_content.classList.add('display_none');
            macbook_content.classList.add('display_none');

            oppo_content.classList.remove('display_none');
        });
    });



</script>

</html>
