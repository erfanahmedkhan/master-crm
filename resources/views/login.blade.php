<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="favicon.png">
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="custom.css">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,
        body {
            background-image: url('{{ asset('images/changan-autos.jpeg') }}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            height: 100% !important;
            font-family: 'Numans', sans-serif !important;
        }

        .alert-danger {
            color: #ffffff !important;
            background-color: #fc2539 !important;
            border-color: #f5c6cb !important;
        }

        .container {
            height: 100% !important;
            align-content: center !important;
        }

        .card {
            height: 333px !important;
            margin-top: auto !important;
            margin-bottom: auto !important;
            width: 400px !important;
            background-color: rgba(233, 233, 233, 0.5) !important;
        }

        #crm-heading {
            font-weight: bold !important;
        }

        .input-group-prepend label {
            width: 50px !important;
            background-color: #f58935 !important;
            color: black !important;
            border: 0 !important;
        }

        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;
        }

        .login_btn {
            color: black !important;
            background-color: #f58935 !important;
            width: 50% !important;
            margin-left: 25% !important;
            font-weight: bold !important;
        }

        .bg-black {
            background: black !important;
            width: fit-content !important;
            padding: 2;
        }

        a:link {
            text-decoration: none;
        }

        .link:hover {
            color: #007bff !important;
            background: transparent !important;
        }
    </style>
</head>

<body style="background-image: url('{{ asset('images/changan-autos.jpeg') }}');">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div>
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif
                    @if (session('error'))
                        <div id="alertMessage" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('error') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="div">
                    <center><img src="{{ asset('images/Changan-Auto-logo - black.png') }}" alt=""
                            style="height: 12vh;"></center>
                    <center>
                        <h6 id="crm-heading">Customer Relationship Management</h6>
                    </center>
                </div>
                <div class="card-body">
                    <form action="{{ url('login-post') }}" method="POST">
                        @csrf
                        {{-- username --}}
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #f58935;">
                                <label for="username" class="input-group-text">
                                    <i class="fas fa-user" style="background-color: #f58935;"></i>
                                </label>
                            </div>
                            <input type="text" class="form-control" placeholder="username" name="username"
                                id="username">
                        </div>
                        {{-- password --}}
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <label for="password" class="input-group-text"><i class="fas fa-key"></i></label>
                            </div>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn login_btn">
                        </div>
                    </form>
                    <center>
                        <div class="footer">
                            <p class="text-white m-1" style="font-weight: bold">Don't have an user account?
                                <a href="{{ url('crm-user-signup') }}" class="text-white link">
                                    <span class="text-primary link">Create</span></a>
                            </p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    setTimeout(function() {
        $('#alertMessage').fadeOut('fast');
    }, 1000);
</script>

</html>
<!--Made with love by Mutiullah Samim -->
