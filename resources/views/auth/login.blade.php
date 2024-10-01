<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duolingo-Login</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />

    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/loginpage.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/signup.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />

    <!-- Custom JavaScript -->
    {{-- <script src="{{ url('duolingo-clone-master/js/loginpage.js') }}"></script>
    <script type="module" src="{{ url('duolingo-clone-master/js/firebaseLogin.js') }}"></script>
    <script type="module" src="{{ url('duolingo-clone-master/js/forgotPassword.js') }}"></script> --}}
</head>

<body>
    <div class="main-container">
        <div class="signup-page-container">
            <div class="close-button-div">
                <a href="{{ url('duolingo-clone-master/index.html') }}">
                    <img src="{{ url('duolingo-clone-master/assets/svg/close-button.svg') }}" alt="close button" />
                </a>
            </div>

            <div class="login-button-container">
                <button class="login-button button-div" id="login-button" onclick="signupButtonAnimation()">
                    SIGN UP
                </button>
            </div>

            <form method="POST" action="{{ route('login') }}" class="signup-section-main" id="main-form">
                @csrf
                <div class="signup-information-div">
                    <h1 class="create-profile-heading">Log in</h1>

                    <div class="input-fields-div">
                        <!-- Email Input -->
                        <div class="field-one">
                            <input class="input-field" id="email-input" type="email" name="email"
                                value="{{ old('email') }}" required autofocus autocomplete="username"
                                placeholder="Email" />
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="field-one password-div">
                            <input class="input-field password-input" id="password-input" type="password"
                                name="password" required autocomplete="current-password" placeholder="Password" />
                            <a class="forgot" id="forgot-password">Forgot?</a>
                            @error('password')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <!-- Forgot Password Link -->
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <!-- Login Button -->
                        <div class="create-account-button-container">
                            <button type="submit" class="create-account-button button-div" id="create-account-button"
                                onclick="loginAccountButtonAnimation()">
                                <span id="login-span">LOG IN</span>
                                <div class="loading-balls-container hidden" style="transition-duration: 250ms"
                                    id="loading-balls-container">
                                    <div class="animation loading-ball"></div>
                                    <div class="animation second-animation loading-ball"></div>
                                    <div class="animation third-animation loading-ball"></div>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="split-line"></div>

                    <!-- Terms and Privacy Section -->
                    <div class="terms-privacy-container">
                        <div class="terms-privacy">
                            <span>By signing in to Duolingo, you agree to our
                                <a href="https://www.duolingo.com/privacy?wantsPlainInfo=1"><b>Terms</b></a>
                                and
                                <a href="https://www.duolingo.com/privacy?wantsPlainInfo=1"><b>Privacy
                                        Policy</b></a>.
                            </span>
                        </div>
                        <div class="terms-privacy">
                            <span>This site is protected by reCAPTCHA Enterprise and the Google
                                <a href="https://policies.google.com/privacy">
                                    <b>Privacy Policy</b></a> and
                                <a href="https://policies.google.com/terms"><b>Terms of Service</b></a>
                                apply.
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
