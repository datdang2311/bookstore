<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('http://code.jquery.com/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript"></script>
</head>
<body class="modal-open">

<div class="modal fade in" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="false" style="display: block;">
    @if(Request::get('err') == 'invalid')
        <div class="alert alert-danger alert-danger-login">Sai thông tin đăng nhập !!!</div>
    @endif
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Admin Login</h1><br>

            <form method="post" action="">
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="btn btn-info" value="Login">
                <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>

</body>
</html>