<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  {{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
    @import url(http://fonts.googleapis.com/css?family=Roboto:400);
    body {
      background-color:#fff;
      -webkit-font-smoothing: antialiased;
      font: normal 14px Roboto,arial,sans-serif;
    }

    .container {
        padding: 25px;
        position: fixed;
    }

    .form-login {
        background-color: #EDEDED;
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 15px;
        border-color:#d2d2d2;
        border-width: 5px;
        box-shadow:0 1px 0 #cfcfcf;
    }

    h4 {
    border:0 solid #fff;
    border-bottom-width:1px;
    padding-bottom:10px;
    text-align: center;
    }

    .form-control {
        border-radius: 10px;
    }

    .wrapper {
        text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="form-login">
          <h4>Thông tin đăng nhập</h4>
          {!! Form::open(['url' => 'api/login', 'method' => 'post']) !!}
            @if (session('key'))
              <div class="alert alert-danger" role="alert">Email hoặc mật khẩu không đúng</div>
            @endif
            {!!Form::email('email', null, ['class' => 'form-control input-sm chat-input', 'placeholder' => 'Email...']);!!}
            </br>
            {!!Form::password('password', ['class' => 'form-control input-sm chat-input', 'placeholder' => 'Mật khẩu...']);!!}
            </br>
            <div class="wrapper">
              <span class="group-btn">
                  {!!Form::submit('Đăng nhập', ['class' => 'btn btn-primary btn-md']);!!}
              </span>
              <span class="group-btn">
                <a href={{action("\PhpSoft\Users\Controllers\UserController@getViewRegister")}} class="btn btn-primary btn-md">Quay lại đăng ký</a>
              </span>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</body>
</html>