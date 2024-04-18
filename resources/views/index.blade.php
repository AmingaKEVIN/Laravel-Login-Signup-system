<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nelson mandela sokohuru</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khojki&family=Permanent+Marker&family=Protest+Revolution&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5569c38631.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
    .product4{
        background-color:beige;
        height:650px;
    }
    .product4 img{
   width:290px;
   height:250px;
    object-fit: contain;
}
.product4 a{
    background-color:#091997;
    color:white;
    padding:10px;
    text-decoration:none;
    border-radius: 10px;
}
.products3{
    margin-top:40px;
}

</style>

<body>
    <div class="nav">
         <a href=""class='active1'>NELSON MANDELA SOKOHURU</a>
        <a href="index.php" class="active">Home</a>
        <a href="">Categories</a>
       
        <a href="{{route('customer.logout')}}">Logout</a>
        <a href="{{route('login')}}">Login</a>
        <a href="signup.php">Sign up</a>
    </div>
    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('lgnsuccess'))
    <div class="alert alert-success">
        {{ session('lgnsuccess') }}
    </div>
@endif
    <div class="content">
        <div class="content1">
            <img src="{{ asset('images/illust1.svg') }}" alt="">
        </div>
        <div class="content2">
            <h1>Nelson Mandela Sokohuru</h1>
            <p>Welcome to <span class='span1'>Nelson Mandela Sokohuru</span> - your gateway to amplified visibility and
                skyrocketing sales! We're revolutionizing the way businesses connect with their
                audience by offering an affordable and highly effective advertising solution.
                For just 50 Kenyan Shillings, you can unlock the power of targeted promotion
                and showcase your products to a vast audience of potential customers.
                Say goodbye to expensive advertising costs and hello to unparalleled
                exposure for your brand.
                Join us today and let's elevate your business to new heights together!</p>
            <div class='content3'> <a href="signup.php">Get Started</a></div>
        </div>
    </div>
    <div class="products">
        <div class="products2"></div>
        <div class='products1'>
            <h1>ALL PRODUCTS</h1>
        </div>
    </div>
    <div class="search">
        <h1>Search for products</h1>
        <form action="
        ">
    <input type="text" name="" id="">
    <input type="submit" value="SEARCH" style="background-color:#091997; color:white; border:none;">
    </form>
    </div>
    <div class="products3">
        <div class="product4">
            <img src="{{ asset('images/photo1.jpg') }}" alt="">
            <h3><i class='bx bxs-shopping-bag-alt'></i>   Name</h3>
            <h3><i class="fa-solid fa-cart-shopping"></i>   Product description</h3>
            <h3><i class='bx bx-wallet-alt'></i>   Price</h3>
            <h3><a href="">View more about product</a></h3>
                <h3><i class="fa-regular fa-user"></i>   Posted by <h4>kEVIN AMINGA</h4> </h3>
               
                <h3><i class='bx bx-wallet-alt'></i>   Contacts</h3>
                
        </div>
        
    </div>
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
   
</body>

</html>