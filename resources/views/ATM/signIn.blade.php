<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>

    <link href="image/icon.png" rel="shortcut icon"> <!-- icon tab browser -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/atmstyle.css') }}">
</head>
<body>
    <div class="container bg1">
        <img class="headerLogo" src="{{url('/image/logoBesar.png')}}">
        <div class="content">
            <p style="margin-top:5.1vw; font-size:3vw; font-weight:bold; color:#343A40">Masuk ke ATM</p>
            <p style="font-size:2vw; font-weight:bold; color:#6C757D; margin-top:1vw; margin-bottom:3vw">pilih metode untuk melanjutkan!😉</p>
            <a href="atm-qrcode"><button style="margin-right:14.5vw">QR Code</button></a>
            <a href="atm-idcard"><button>No Rekening</button></a>
        </div>
    </div>
</body>
</html>