<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Course Regiatration') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 logo">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="{{ asset('images/header.jpg') }}"/>
                           <!-- <marquee class="marquee">Welcome to Online Course Registration Portal !</marquee>
                           -->
                            <div class="content">
                                <h3>LOGIN INFORMATION</h3>
                                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                    @csrf

                                    <table border="0" cellpadding="2" cellspacing="0" align="center" id="logintable">
                                        <tr>
                                            <td>User Type</td>
                                            <td></td>
                                            <td>
                                                <select name="role_id">
                                                    <option value="2">Student</option>
                                                    <option value="3">Department</option>
                                                    <option value="4">Hall</option>
                                                    <option value="5">Register</option>
                                                    <option value="1">Admin</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>User ID</td>
                                            <td></td>
                                            <td><input type="text" placeholder="ex:151148" name="user_id" id="user_id" /></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td></td>
                                            <td><input type="password" name="password" id="inputpassword" /></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><input type="submit" name="userlogin" value="Login" nid="userlogibutton" /></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><a href="recoverpassword.php" style="color: #da70d8; font-weight: bold;">Forgot your Password?</a></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
