<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/icon.png" rel="shortcut icon"> <!-- icon tab browser -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'> -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <title>Ecotech</title>
    <style>
        
        .container{
            padding:3%;
            /* border:solid black 1px; */
            /* padding-top:3%;
            padding-left:5%; */
        }
        p{
            font-family:'Nunito';
            margin-block-start:0em;
            margin-block-end:5px;
            font-weight:bold;
        }
        span, a, button, #reader__camera_selection, #reader__header_message{
            font-family:'Nunito';
        }
        #qr-shaded-region{
            /* display:none; */
        }
        #reader__scan_region img{
            padding-top:4%;
            width:11%;
        }
        /*design custom alert*/
        .popup_box{
            width: 312px;
            height:103px;
            background: white;
            text-align: center;
            align-items: center;
            padding: 19px 27px 13px;
            /* border: 1px solid #b3b3b3; */
            box-shadow: 0px 5px 10px rgba(0,0,0,.2);
            z-index: 9999;
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 5px;
        }
        .popup_box label{
            font-weight:bold;
            font-family:'Nunito';
            font-size: 15px;
            color: black;
        }
        .popup_box .btns{
            margin: 40px 0 0 0;
        }
        .btns .btn1, .btns .btn2{
            font-size: 14px;
            border-radius: 4px;
            text-decoration:none;
        }
        .btns .btn1{
            color: black;
            background: #F6F6F6;
            padding: 7px 25.5px;
        }
        .btns .btn2{
            margin-left: 118px;
            background: #28DF99;
            color:white;
            padding: 7px 24px;
        }
        .btns .btn1:hover{
            transition: .5s;
            background: #E3E3E3;
        }
        .btns .btn2:hover{
            transition: .5s;
            background: #22C586;
        }

        /*responsive web*/
        @media only screen and (max-width: 1000px){
            .container{
                max-width: 90vw;
            }
            #reader__scan_region img{
                padding-top:4%;
                width:15%;
            }
        }
        @media only screen and (max-width: 800px) {
            .container{
                max-width: 90vw;
            }
            #reader__scan_region img{
                padding-top:5%;
                width:20%;
            }
        }
        @media only screen and (max-width: 600px) {
            .container{
                max-width: 90vw;
            }
            #reader__scan_region img{
                padding-top:13%;
                width:20%;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <p style="font-size:24px; color:##343A40; margin-bottom:2%">Scan ATM</p>
        <p style="font-size:16px; margin-bottom:1%; color:#6C757D">Scan to Login to ATM</p>
        <div style="border-radius:5px; height:350px; background-color:#D1D1D1" id="reader" width="600px"></div>
    </div>
    <div class="custom_alert">
      <div class="popup_box">
        <label>Are you sure you're logged into Atm?</label>
        <div class="btns">
          <a href="#" class="btn1">No</a>
          <a href="#" class="btn2">Yes</a>
        </div>
      </div>
    </div>
</body>
</html>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        console.log(`Code matched = ${decodedText}`, decodedResult);
        $('.popup_box').css("display", "block");
        $('.btn1').click(function(){
          $('.popup_box').css("display", "none");
        });
        $('.btn2').click(function(){
          $('.popup_box').css("display", "none");
          alert("Success logged into ATM.");
        });
        }

        function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",
        { fps: 10, qrbox: {width: 250, height: 250} },
        /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
    <style>
        img{
            width:100px;
        }
    </style>