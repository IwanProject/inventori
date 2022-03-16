<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="<?= asset('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/plugins/perfectscroll/perfect-scrollbar.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/plugins/pace/pace.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/plugins/datatables/datatables.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/plugins/highlight/styles/github-gist.css') ?>" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="<?= asset('assets/css/main.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/css/custom.css') ?>" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('assets/images/neptune.png') ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('assets/images/neptune.png') ?>" />

</head>

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>

        <div class="app-auth-container">
            @if (session()->has('LoginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('LoginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="logo">
                <a href="/login"></a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have
                an
                account? <a href="{{ url('/register') }}">Sign Up</a></p>

            <form action="/login" method="post">
                @csrf
                <div class="auth-credentials m-b-xxl">
                    <label for="signInEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control m-b-md" name="email" id="signInEmail"
                        aria-describedby="signInEmail" placeholder="example@gmail.com.com">

                    <label for="signInPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="signInPassword"
                        aria-describedby="signInPassword"
                        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>

            </form>


        </div>
    </div>

    <!-- Javascripts -->
    <script src="<?= asset('assets/plugins/jquery/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/pace/pace.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/highlight/highlight.pack.js') ?>"></script>
    <script src="<?= asset('assets/plugins/datatables/datatables.min.js') ?>"></script>
    <script src="<?= asset('assets/js/main.min.js') ?>"></script>
    <script src="<?= asset('assets/js/custom.js') ?>"></script>
    <script src="<?= asset('assets/js/pages/dashboard.js') ?>"></script>
    <script src="<?= asset('assets/js/pages/datatables.js') ?>"></script>
</body>

</html>
