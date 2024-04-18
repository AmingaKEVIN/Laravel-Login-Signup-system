<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nelson mandela sokohuru</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khojki&family=Permanent+Marker&family=Protest+Revolution&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5569c38631.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
    .signup{
    background-image: none;
}
</style>

<body>
    <div class="nav">
        <a href=""class='active1'>NELSON MANDELA SOKOHURU</a>
       
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('signup.index')}}">Sign up</a>
    </div>
    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

   <div class="signup">
    <div class="signup1">
        <h1>NELSON MANDELA SOKOHURU</h1>
        <p>"Welcome to our platform! To sign up and unlock access to advertise an unlimited number of 
            products, there's a one-time fee of 50 Kenyan Shillings.
             Create your account now to start showcasing your products to our wide audience!"</p>

             <h2>What you get</h2>
             <ul>
                <li>Advertising at a one time fee of 50ksh</li>
                <li>Advertise unlimited products</li>
                
             </ul>
    </div>
    <div class="signup2">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       
    <form action="{{route('signup.store')}}" method="post">
        @csrf
    <h2>FULL NAMES</h2>
   
    <input type="text" name="Fullnames" id="">
    <h2>EMAIL</h2>
   
   
    <input type="email" name="Email" id="">
    <h2>PASSWORD</h2>
    
    <input type="password" name="password" id="">
    <h2>REPEAT PASSWORD</h2>
   
    <input type="password" name="password_confirmation" id="">
   <button>Submit</button>
    
    </form>
    </div>
    <a href="/">Already a user LOGIN</a>
   </div>
   <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
</body>
</html>