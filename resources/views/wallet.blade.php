@extends('layouts.main')
<link rel="stylesheet" href="/css/landing.css"/>
<link href="image/icon.png" rel="shortcut icon"> <!-- icon tab browser -->
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/atmstyle.css')}}"> -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    .wallet-container{
        padding: 7.5vw 5.9vw;
        font-family:'Nunito';
    }
    *{
        /* border: 1px solid black; */
    }
    .uk1{
        font-size:265%;
        font-weight:bold;
        color:#343A40;
    }
    .uk2{
        font-size:180%;
        font-weight:bold;
        color:#343A40;
    }
    ._button{
        height:54.5%;
        width:100%;
        font-size:110%;
        background-color:#28DF99;
        color:white;
        border:none;
        border-radius:4.8px;
        padding-right:15px;
        padding-left:15px;
    }
    ._button:hover{
        transition: .5s;
        background: #22C586;
    }
    .info_wallet{
        background-color:#F6F6F6;
        padding:3%;
        height:12vw;
    }
    ._img{
        margin-right:2vw;
    }
    /* @media only screen and (max-width: 500px) {
        .body{
            weight:500px;
        }
    } */
</style>

@section('container')
<div class="wallet-container">
    <div class="d-flex justify-content-between">
        <p class="uk1">Dompet</p>
        <h1></h1>
        <a href="#"><button class="_button" style="margin-top:10%">Kembali</button></a>
    </div>
    <div class="d-flex justify-content-between info_wallet">
        <span>
            <p style="font-size:100%; font-weight:bold; color:#6C757D">Detail Saldo</p>
            <p class="uk1">Rp 11.200.000</p>
        </span>
        <span  class="d-flex">
            <img class="_img p-2" src="{{url('/image/bottle.png')}}" style="height:6.5vw">
            <div>
                <p class="uk2">190</p>
                <p style="font-size:100%; color:#6C757D">Total Botol</p>
            </div>
        </span>
        <span  class="d-flex">
            <img class="_img p-2" src="{{url('/image/salary.png')}}" style="height:6.5vw">
            <div>
                <p class="uk2">Rp 320.000</p>
                <p style="font-size:100%; color:#6C757D">Penghasilan Terakhir</p>
            </div>
        </span>
    </div>
        <p style="margin-top:3%" class="uk2">Riwayat Penukaran Botol</p>
        <img class="_img p-2" src="{{url('/image/riwayat.png')}}" style="width:100%">
    <div>
        <!-- isinya history terhubung ke db -->
    </div>
</div>
@endsection
