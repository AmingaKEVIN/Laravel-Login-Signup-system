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
    .login{
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
    <div class="login">
        <div class="login1">
            <h1>NELSON MANDELA SOKOHURU</h1>
            <p>"Welcome to our web app! Login now to access a myriad of features, 
                from managing inquiries about your products to effortlessly posting new items.
                 Your account is your gateway to seamless management and growth within our platform."</p>
        </div>
        <div class="login2">
            <div class="login3">
                <h1>Login </h1>
            </div>
            <div class="signup2">
                @if(session()->has('success'))
                <div class="alert alert-danger">
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
            <form action="{{route('customer.login.submit')}}" method="post">
                @csrf
              
                <h1>Email</h1>
                <input type="email" name="email" id=""  placeholder="Email">
                <h1>Password</h1>
                <input type="password" name="password" id="" placeholder="Password">
               <button>submit</button>
            </form>
            
                <a href="{{route('passwordreset')}}">Forgot password</a>
                <a href="{{route('signup.index')}}">Not a user sign up</a>
            
           
            
        </div>
    </div>
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
</body>
</html>