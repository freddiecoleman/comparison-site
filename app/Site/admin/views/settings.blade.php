<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/components/twitter/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/components/twitter/dist/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        <div class="row">
            {{ Form::open(array('class' => 'form-horizontal')) }}
            <div class="col-md-6">
                <h4>Site info</h4><hr>
                <div class="form-group">
                    {{ Form::label('sitename', 'Site name: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::text('sitename', null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('sitetitle', 'Site title: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::text('rooturl', null, array('class' => 'form-control')); }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('rooturl', 'Root url: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::text('rooturl', Request::root(), array('class' => 'form-control')); }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('subject', 'Subjects: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::select('subject[]', array('Car insurance', 'Travel insurance'), null, array('multiple' => 'true', 'class' => 'form-control')); }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label(null, null, array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::text('addSubject', null, array('class' => 'form-control', 'placeholder' => 'Add new subject')); }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label(null, null, array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ link_to('#', 'Add', array('class' => 'btn btn-info')); }}
                        {{ link_to('#', 'Delete', array('class' => 'btn btn-danger')); }}
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        {{ Form::submit('Submit', array('class' => 'btn btn-default')); }}
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
            {{ Form::close() }}
        </div>


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/components/twitter/dist/js/bootstrap.min.js"></script>
  </body>
</html>