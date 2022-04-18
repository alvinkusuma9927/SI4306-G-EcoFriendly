<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>

    <link href="image/icon.png" rel="shortcut icon"> <!-- icon tab browser -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/atmstyle.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/dcode.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/keyboard.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/atmstyle.css') }}"> -->
</head>
<body>
    <div class="loader">
        <img src="{{url('/image/Loader.gif')}}"> 
    </div>
    <div class="container bg1">
        <img class="headerLogo" src="{{url('/image/rectangle.png')}}">
        <div class="content">
            <p style="margin-top:11vw; font-size:3vw; font-weight:bold; color:#343A40; margin-bottom:3vw">The ID you entered is wrong, please fill in again!</p>
        </div>
        <div class="flex-container">
            <div style="flex-grow: 8"></div>
            <div style="flex-grow: 1"></div>
            <div style="flex-grow: 1; margin-top:10.7%"><a href="atm-idcard"><button class="kanan">Try Again</button></a></div>
        </div>
    </div>
</body>
</html>
<script src="js/keyboard.js"></script>
<script type="text/javascript">
    window.addEventListener("load", function(){
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; //loader class
    });
</script>