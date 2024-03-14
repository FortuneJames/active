<!DOCTYPE html>
<html lang="en" class="h-100">


<head>

    <!-- Title -->
    <title>Register</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('/homepage/img/OWB-LOGO-CC.png') }}" type="image/x-icon">


    <!-- SEO Meta Tags -->
    <meta name="keywords" content="Interactive Achivers, Funds Platform, Artificial Intelligence, Fund Allocation">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">





    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link class="main-css" href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">


</head>

<body class="vh-100">

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{ route('register') }}"><img src="/homepage/img/OWB-LOGO-CC.png"
                                                width="50%" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input class="form-control" placeholder="Name" type="text" name="name"
                                                :value="old('name')" required autofocus autocomplete="name">
                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" placeholder="hello@example.com" type="email"
                                                name="email" :value="old('email')" required autocomplete="username">
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control"  placeholder="+1 345 545 4643" type="tel"
                                                name="number" :value="old('email')" required autocomplete="username">
                                        </div>
                                        <x-input-error :messages="$errors->get('number')" class="mt-2" />
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <input class="form-control" placeholder="Uk" type="country" name="country"
                                                :value="old('country')" required autocomplete="username">
                                        </div>
                                        <x-input-error :messages="$errors->get('country')" class="mt-2" />

                                        <label class="form-label">Password</label>
                                        <div class="mb-3 position-relative">
                                            <input id="dz-password" class="form-control" type="password" name="password"
                                                required autocomplete="new-password">
                                            <span class="show-pass eye">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                        <label class="form-label">Confirm Password</label>
                                        <div class="mb-3 position-relative">
                                            <input id="dz-password" class="form-control" type="password"
                                                name="password_confirmation" required autocomplete="new-password">
                                            <span class="show-pass eye">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                        <div class="text-center mt-4">
                                            <button class="btn btn-primary btn-block">Sign me
                                                up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="mb-0">Already have an account? <a class="text-primary"
                                                href="{{ route('login') }}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
  Scripts
 ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <div class="gtranslate_wrapper"></div>
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "detect_browser_language": true,
            "wrapper_selector": ".gtranslate_wrapper",
            "horizontal_position": "left",
            "vertical_position": "top"
        }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/dropdown.js" defer></script>
    <script src="//code.tidio.co/ptzevyuu90mvxgiydeh6zh3gwbsuhv7j.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>
    <script>
        var phoneInput = document.querySelector("#phone");
        intlTelInput(phoneInput, {
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js"
        });
      </script>




</body>


</html>
