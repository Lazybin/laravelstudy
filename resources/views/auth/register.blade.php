<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XXX后台管理系统</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/sbadmin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/sbadmin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/sbadmin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/sbadmin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">请注册</h3>
                    </div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form role="form" method="POST" action="{{ url('/auth/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                        <div class="form-group">
                            <input type="name" class="form-control" name="name" value="{{ old('name') }}" placeholder="用户名" value="{{ old('name') }}" autofocus>
                        </div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="电子邮箱" value="{{ old('email') }}" >
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" name="password" placeholder="确认密码" value="{{ old('password') }}">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password_confirmation" placeholder="确认密码" value="{{ old('password_confirmation') }}">
						</div>
						<div class="form-group">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="注册"/>
						</div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('sbadmin/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('sbadmin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('/sbadmin/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('/sbadmin/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
