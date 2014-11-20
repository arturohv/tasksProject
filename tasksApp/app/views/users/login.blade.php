<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	{{HTML::style('bootstrap/css/bootstrap.min.css')}}
</head>
<body>
	
	<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Iniciar Sesión</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            @if ($errors->has())
							    <div class="alert-danger text-center" role="alert">
							        <small>{{ $errors->first('email') }}</small>
							        <small>{{ $errors->first('password') }}</small>
							        <small>{{ $errors->first('invalid_credentials') }}</small>
							    </div>
							@endif
							{{ Form::open(array('url' => 'login')) }}

							<div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                 {{Form::text('email', Input::old('email'), array('placeholder' => 'Email', 'class' => 'form-control', 'required' => 'true'))}}                                   
                            </div>
							<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        {{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) }}
                                    </div>	
								
								<br>
								<div class="col-sm-12 controls">
                                      {{ Form::submit('Login', array())}}
                                </div>                                
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                           No tiene una cuenta? 
                                        {{link_to("users/create", 'Registrarse', $attributes = array(), $secure = null);}}     
                                        </div>
                                    </div>
                                </div>    
								
								
							{{ Form::close() }}
							               	



                        </div>                     
                    </div>  
        </div>
    

</body>
</html>










