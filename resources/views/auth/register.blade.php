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
                font-size:15px;
                color: #343A40;
            }
            .logo{
                margin:auto;
                width:50%;
                padding-top:0px;
                padding-bottom:22px;
            }
        </style>
    </head>
    <body>
        <x-guest-layout>
            <x-jet-authentication-card>
            <img class="logo" src="{{url('/image/logo.png')}}">
            <p class="title">Adventure starts here 🚀</p>
            <!-- <p class="_text">Get Profit with us here!</p> -->
                <x-slot name="logo">
                    <img style="display:none" src="{{ asset('image/logo.png') }}" />
                </x-slot>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-jet-label for="name" style="margin-top:16px; font-size:16px; color:#343A40" value="{{ __('Username') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" placeholder="Enter your Username" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" style="font-size:16px; color:#343A40" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" placeholder="Enter your Email" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" style="font-size:16px; color:#343A40" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" placeholder="Enter your New Password" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" style="font-size:16px; color:#343A40" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" placeholder="Enter your New Password" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif

                    <div class="flex items-center mt-4 mb-3">
                        <button class="py-2" style="background-color:#28DF99; width:100%; color:white; border-radius:6px">
                            {{ __('Sign Up') }}
                        </button>
                    </div>   
                    <p class="_text" style="font-family: Nunito; text-align:center">Already registered? <a class="_text" style="color:#28DF99" href="{{ route('login') }}">Sign In</a></p>
                </form>
            </x-jet-authentication-card>
        </x-guest-layout>
    </body>
</html>
