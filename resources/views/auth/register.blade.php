<!-- resources/views/auth/register.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/signup.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />
    <title>Register</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />
</head>

<body>
    <div class="main-container">
        <div class="signup-page-container">
            <div class="close-button-div">
                <a href="{{ url('/') }}">
                    <img src="{{ url('duolingo-clone-master/assets/svg/close-button.svg') }}" alt="close button" />
                </a>
            </div>

            <div class="login-button-container">
                <button class="login-button button-div" id="login-button">
                    LOGIN
                </button>
            </div>

            <!-- Registration Form -->
            <form class="signup-section-main" id="main-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="signup-information-div">
                    <h1 class="create-profile-heading">Create your profile</h1>
                    <div class="input-fields-div">
                        <!-- Age Field (Optional) -->
                        <div class="field-one">
                            <input class="input-field" id="age-input" type="text" placeholder="Age" />
                            <div class="error-message" id="age-error-message"></div>
                        </div>

                        <!-- Name Field -->
                        <div class="field-one">
                            <input class="input-field" id="name-input" type="text" name="name"
                                value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Name" />
                            @error('name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="field-one">
                            <input class="input-field" id="email-input" type="email" name="email"
                                value="{{ old('email') }}" required autocomplete="username" placeholder="Email" />
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="field-one">
                            <input class="input-field" id="password-input" type="password" name="password" required
                                autocomplete="new-password" placeholder="Password" />
                            @error('password')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="field-one">
                            <input class="input-field" id="password-confirmation-input" type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirm password" />
                        </div>
                    </div>

                    <!-- Create Account Button -->
                    <div class="create-account-button-container">
                        <button type="submit" class="create-account-button button-div" id="create-account-button">
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

                <!-- Terms & Privacy Links -->
                <div class="terms-privacy-container">
                    <div class="terms-privacy">
                        <span>By signing in to Duolingo, you agree to our
                            <a href="https://www.duolingo.com/privacy"><b>Terms</b></a> and
                            <a href="https://www.duolingo.com/privacy"><b>Privacy Policy</b></a>.
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
