<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
	{{HTML::script('js/jquery-2.1.1.min.js')}}
  {{HTML::script('js/jquery-ui.min.js')}}
	{{HTML::style('bootstrap/css/bootstrap.min.css')}}
  {{HTML::style('bootstrap/css/jquery-ui.min.css')}}
  <style type="text/css">
    body {
  padding-top: 50px;
}
.starter-template {
  padding: 40px 15px;
  text-align: center;
}
  </style>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="tasks">Tasks Aplication</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/users">Login</a></li>
            <li><a href="/users">log out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	{{$content}}
	{{HTML::script('bootstrap/js/bootstrap.min.js')}}
</body>
</html>