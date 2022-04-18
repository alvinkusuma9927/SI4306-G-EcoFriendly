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
    <div class="container bg2">
        <img class="headerLogo" src="{{url('/image/logoBesar.png')}}">
        <div class="content">
            <img style="width:11.5%; margin-top:.5%;" src="{{url('/image/wallet-big.png')}}">
            <p style="margin-top:.1%; font-size:3vw; font-weight:bold; color:#343A40">Your Balance</p>
            <div style="margin-top:0px" class="flex-container">
                <div style="flex-grow: 3" class=""total></div>
                <div style="flex-grow: 4; background-color:white; padding:1.5%; border-radius:5px">
                    <p class="" style="font-size:18px; text-align:left; font-weight:bold; color:#6C757D">Balance</p>
                    <p class="" style="font-size:22px; text-align:left; font-weight:bold; color:#212529">Rp. 0000</p>
                </div>
                <div style="flex-grow: 3"></div>
            </div>
        </div>
        <a href="atm-menu"><button class="red" style="margin-top:4%">Back</button></a>
    </div>
</body>
</html>