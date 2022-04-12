<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
        <style>
            body{
                font-family: 'Nunito';
            }
            .title{
                font-size:24px;
                font-weight: bold;
                color: #343A40;
            }
            ._text{
                font-size:16px;
                color: #343A40;
            }
            .logo{
                margin:auto;
                width:50%;
                padding-top:40px;
                padding-bottom:50px;
            }

        /*responsive. bljr edit sass*/
        @media only screen and (max-width: 630px) {
            .underline{
                margin-left:30%;
            }
            .bg-white{
                width:100px;
            }
        }
        </style>
    </head>
    <body>
        <x-guest-layout>
            <x-jet-authentication-card class="p-5">
                <img class="logo" src="{{url('/image/logo.png')}}">
                <p class="title mb-1">Welcome to Website!👋 </p>
                <p class="_text">Please Sign-in to your Account and start the Adventure</p>
                <x-slot name="logo">
                    <img style="display:none" src="{{ asset('image/logo.png') }}" />
                </x-slot>

                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-jet-label for="email" style="margin-top:24px; font-size:16px; color:#343A40" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" placeholder="Enter your Username" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" style="font-size:16px; color:#343A40" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" placeholder="Enter your Password" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div style="margin:3% 0 4% 0">
                        <label for="remember_me">
                            <x-jet-checkbox class="p-2" id="remember_me" name="remember" />
                            <span class="text-sm text-gray-6002">{{ __('Remember me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" style="margin-left:34%" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="flex items-center">
                        <button class="py-2" style="background-color:#28DF99; width:100%; color:white; border-radius:6px">
                            {{ __('Sign In') }}
                        </button>
                    </div>   
                    <p class="_text" style="padding-top:32px; font-family: Nunito; text-align:center">New on our platform? <a class="_text" style="color:#28DF99" href="{{ route('register') }}">Create an Account</a></p>

        </form>
            </x-jet-authentication-card>
        </x-guest-layout>
    </body>
</html>
