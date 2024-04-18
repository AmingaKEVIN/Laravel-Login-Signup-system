<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset your password</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khojki&family=Permanent+Marker&family=Protest+Revolution&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5569c38631.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
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
    <h1>Enter new password  </h1>
    <div class="fm">
        <form action="/rstpassword" method="post">
            @csrf
        <input type="hidden" name="token" value="{{ $token }}">
          <h1>Email</h1>
          <input type="email" name="email" id="">
            <h1>New password </h1>
            <input type="password" name="password" id="">
            <h1>Repeat password</h1>
            <input type="password" name="password_confirmation" id="">
            <button>Save new password </button>
        </form>
    </div>
</body>
</html>