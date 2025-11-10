<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#004F63" />
    <title>Register | {{ env('APP_NAME') }}</title>

    <!-- Preloads -->
    <link rel="preload" href="{{ asset('front/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('front/css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('front/css/style.css') }}" as="style">
    <link rel="icon" href="{{ asset('strikepricetrading_icon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('strikepricetrading_icon.png') }}">

    <!-- UIKit + Custom -->
    <link rel="stylesheet" href="{{ asset('front/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    <style>
        /* --- Page Base --- */
        body {
            background: linear-gradient(to right, #f7f9fc, #e6f1f4);
            font-family: 'Rubik', sans-serif;
            overflow-x: hidden;
        }

        /* --- Modern Loader Spinner --- */
        .in-loader {
            position: fixed;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f9fbfd;
            z-index: 9999;
        }

        .spinner {
            width: 60px;
            height: 60px;
            border: 5px solid #dce6f2;
            border-top-color: #004F63;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Fade out animation when loaded */
        body.loaded .in-loader {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s ease, visibility 0.4s ease;
        }

        /* --- Register Card Layout --- */
        .register-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 50px;
            width: 100%;
            max-width: 480px;
            margin: auto;
            animation: fadeUp 0.8s ease-out forwards;
        }

        .register-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .register-header img {
            width: 160px;
            height: auto;
        }

        .register-header h3 {
            margin-top: 20px;
            color: #004F63;
            font-weight: 600;
        }

        label {
            font-weight: 500;
            color: #333;
        }

        input,
        select {
            border: 1px solid #dcdcdc !important;
            transition: 0.3s;
        }

        input:focus,
        select:focus {
            border-color: #004F63 !important;
            box-shadow: 0 0 5px rgba(0, 79, 99, 0.25);
        }

        .uk-button-primary {
            background-color: #004F63 !important;
            color: #fff;
            border: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .uk-button-primary:hover {
            background-color: #003846 !important;
        }

        .uk-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .uk-text-small a {
            color: #004F63;
            text-decoration: none;
        }

        .uk-text-small a:hover {
            text-decoration: underline;
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(40px) scale(0.98);
            }

            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @media (max-width: 640px) {
            .register-card {
                padding: 35px 25px;
            }
        }
    </style>
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div class="spinner"></div>
    </div>
    <!-- preloader end -->

    <main class="uk-section">
        <div class="register-card">
            <div class="register-header">
                <a href="{{ url('/') }}">
    <img src="{{ asset('meeras_1.png') }}" alt="logo" class="img-fluid" style="max-width: 40px;">
</a>

                <h3>Create an Account</h3>
                <p class="uk-text-small">Already have an account?
                    <a href="{{ route('login') }}">Login here</a>
                </p>
            </div>

            @if (count($errors) > 0)
                <div class="uk-alert-danger uk-text-center uk-border-rounded" uk-alert>
                    @foreach ($errors->all() as $error)
                        <p class="uk-margin-remove">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form class="uk-form-stacked" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="uk-margin-small">
                    <label for="firstname">Firstname</label>
                    <input id="firstname" class="uk-input uk-border-rounded" type="text" name="firstname"
                        value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                </div>

                <div class="uk-margin-small">
                    <label for="lastname">Lastname</label>
                    <input id="lastname" class="uk-input uk-border-rounded" type="text" name="lastname"
                        value="{{ old('lastname') }}" required autocomplete="lastname">
                </div>

                <div class="uk-margin-small">
                    <label for="username">Username</label>
                    <input id="username" class="uk-input uk-border-rounded" type="text" name="username"
                        value="{{ old('username') }}" required autocomplete="username">
                </div>

                <div class="uk-margin-small">
                    <label for="email">Email</label>
                    <input id="email" class="uk-input uk-border-rounded" type="email" name="email"
                        value="{{ old('email') }}" required>
                </div>

                <div class="uk-margin-small">
                    <label for="phone">Phone</label>
                    <input id="phone" class="uk-input uk-border-rounded" type="text" name="phone"
                        value="{{ old('phone') }}" required autocomplete="phone">
                </div>

                <div class="uk-margin-small">
                    <label for="country">Country</label>
                    <select name="country" id="country" class="uk-select uk-border-rounded" required>
                        <option value="">Select Country</option>
                        @foreach ($countires as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="uk-margin-small">
                    <label for="password">Password</label>
                    <input id="password" class="uk-input uk-border-rounded" type="password" name="password"
                        required autocomplete="new-password">
                </div>

                <div class="uk-margin-small">
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" class="uk-input uk-border-rounded" type="password"
                        name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="uk-margin-small uk-flex uk-flex-between uk-flex-middle">
                    <label><input class="uk-checkbox uk-border-rounded" type="checkbox" id="remember_me"
                            name="remember"> I Agree</label>
                    <a href="{{ url('policy') }}" class="uk-text-small">Privacy Policy</a>
                </div>

                <div class="uk-margin-top">
                    <button class="uk-button uk-button-primary uk-width-1-1 uk-border-rounded" type="submit">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </main>

    <script src="{{ asset('front/js/vendors/uikit.min.js') }}"></script>
    <script src="{{ asset('front/js/vendors/indonez.min.js') }}"></script>
    <script src="{{ asset('front/js/config-theme.js') }}"></script>

    <script>
        // Fade out preloader once page fully loaded
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
