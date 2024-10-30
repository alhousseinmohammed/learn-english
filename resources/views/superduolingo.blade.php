<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Super Duolingo</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/superduolingo.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>
    <div class="gradient-div">
        <div class="div-close">
            <a href="{{ url('duolingo-clone-master/html/learn.html') }}" class="no-decoration-close">
                <img src="{{ url('duolingo-clone-master/assets/svg/close-button-white.svg') }}" alt="" />
            </a>
        </div>
        <div class="div-main">
            <div class="div-for-two-line">
                <h1 class="super-header-text">
                    Progress faster in your Japanese<br />course with Super!
                </h1>
            </div>
            <div class="table-section">
                <div class="table-glass-div">
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>FREE</th>
                                    <th>
                                        <img src="{{ url('duolingo-clone-master/assets/svg/super-icon.svg') }}"
                                            alt="super-icon" />
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Learning content</td>
                                    <td>
                                        <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-white.svg') }}"
                                            alt="correct" />
                                    </td>
                                    <td>
                                        <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-white.svg') }}"
                                            alt="correct" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Unlimited Hearts</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-white.svg') }}"
                                            alt="correct" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Personalized Practice</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-white.svg') }}"
                                            alt="correct" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Unlimited Legendary</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-white.svg') }}"
                                            alt="correct" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>No Ads</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <img src="{{ url('duolingo-clone-master/assets/svg/correct-tick-white.svg') }}"
                                            alt="correct" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="super-column-div"></div>
                    </div>
                </div>
            </div>
            <div class="button-section">
                <form class="button-div" action="{{ action('App\Http\Controllers\SuperController@store') }}"
                    method="post">
                    @csrf
                    <button type="submit" id="footer-button">
                        <span>Buy Super for ₹199</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="div-super">
            <img src="{{ url('duolingo-clone-master/assets/svg/super-icon.svg') }}" alt="super-icon"
                class="super-icon" />
        </div>
    </div>
    <script src="{{ url('duolingo-clone-master/js/superduolingo.js') }}"></script>
</body>

</html>
