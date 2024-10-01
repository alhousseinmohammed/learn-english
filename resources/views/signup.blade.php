<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/signup.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />
    <title>Duolingo - Login</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />
    {{-- <script src="{{ url('duolingo-clone-master/js/signup.js') }}"></script>
    <script type="module" src="{{ url('duolingo-clone-master/js/firebaseSignup.js') }}"></script> --}}
</head>

<body>
    <div class="main-container">
        <div class="signup-page-container">
            <div class="close-button-div">
                <a href="{{ url('duolingo-clone-master/index.html') }}">
                    <img src="{{ url('duolingo-clone-master/assets/svg/close-button.svg') }}" alt="close button" /></a>
            </div>
            <div class="login-button-container">
                <button class="login-button button-div" id="login-button" onclick="loginButtonAnimation()">
                    LOGIN
                </button>
            </div>
            <form class="signup-section-main" id="main-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="signup-information-div">
                    <h1 class="create-profile-heading">Create your profile</h1>
                    <div class="input-fields-div">
                        <div class="field-one">
                            <input class="input-field" id="age-input" type="text" placeholder="Age" />
                            <div class="error-message" id="age-error-message"></div>
                            <div class="age-privacy-div" id="age-privacy-div">
                                <span class="age-privacy-span">
                                    Providing your age ensures you get the right Duolingo
                                    experience. For more details, please visit our
                                    <a href="https://www.duolingo.com/privacy" target="_blank"
                                        class="privacy-policy-link"><b>Privacy Policy</b></a>
                                </span>
                            </div>
                        </div>
                        <div class="field-one">
                            <input class="input-field" id="name-input" type="text" name="name"
                                value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Name" />
                            <div class="error-message" id="name-error-message"></div>
                        </div>
                        <div class="field-one">
                            <input class="input-field" id="email-input" type="email" value="{{ old('email') }}"
                                required autocomplete="username" placeholder="Email" />
                            <div class="error-message" id="email-error-message"></div>
                        </div>

                        <div class="field-one">
                            <input class="input-field" id="password-input" type="password" name="password" required
                                autocomplete="new-password" placeholder="Password" />
                            <div class="error-message" id="password-error-message"></div>
                        </div>
                        <div class="field-one">
                            <input class="input-field" id="password-input" type="password" name="password-confirmation"
                                required autocomplete="new-password" placeholder="Confirm password" />
                            <div class="error-message" id="password-error-message"></div>
                        </div>
                    </div>



                    <div class="create-account-button-container">
                        <button type="submit" class="create-account-button button-div" id="create-account-button"
                            onclick="createAccountButtonAnimation()">
                            <span id="create-account-span">CREATE ACCOUNT</span>
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

                <div class="terms-privacy-container">
                    <div class="terms-privacy">
                        <span>By signing in to Duolingo, you agree to our
                            <a href="https://www.duolingo.com/privacy?wantsPlainInfo=1"><b>Terms</b></a>
                            and
                            <a href="https://www.duolingo.com/privacy?wantsPlainInfo=1"><b>Privacy
                                    Policy</b></a>.</span>
                    </div>
                    <div class="terms-privacy">
                        <span>This site is protected by reCAPTCHA Enterprise and the Google
                            <a href="https://policies.google.com/privacy">
                                <b>Privacy Policy</b></a>
                            and
                            <a href="https://policies.google.com/terms"><b>Terms of Service</b></a>
                            apply.</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
