<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ToolStack</title>

    <!-- Bootstrap Core CSS -->
    <link href="/template_vendor/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/template_vendor/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/template_vendor/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/template_vendor/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="/chat/css/flags.css">
  <link rel="stylesheet" href="/chat/css/app.css">
   <link rel="stylesheet" href="/css/app.css">
   
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ToolStack</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Completadas</strong>

                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>En progress (9)</strong>

                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw " ></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Nuevo comentario
                                    <span class="pull-right text-muted small">Hace 3 minutos</span>
                                </div>
                            </a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Nuevo tarea
                                    <span class="pull-right text-muted small">Hace 5 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Servidor interrumpido
                                    <span class="pull-right text-muted small">Hace 20 minutos</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation"> 
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>

                        </li> -->
                        <li>
                            <a href="/"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
     
        <!-- Page Content -->
        <div id="page-wrapper">
            <div >
                <div class="row">
                    <div class="col-lg-12" >
                        <h1 class="page-header"></h1>

                        @section('table')
 <div class="main col-md-6 col-md-offset-3">
    <div class="alert alert-danger" id="errors"></div>
    <div id="login-screen">
      <p class="lead">Salas De Conversaciones</p>
      <p>Por favor escriba su nombre y haga click en  'Unirse ' o pulse  Intro.</p>
        <form class="form-inline" id="nameForm">
          <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Escribe su nombre" id="name">
          </div>
          <input type="submit" name="join" id="join" value="Unirse" class="btn btn-primary btn-lg">
        </form>
      </div>
    </div>

    <div class="row" id="main-chat-screen">
      <div class="col-md-4">
        <ul id="rooms" class="list-group"></ul>
        <ul id="people" class="list-group"></ul>
      </div>
      <div class="col-md-8" >
        <div id="conversation">
          <ul id="msgs" class="list-unstyled"></ul>
        </div>
        <form id="chatForm" class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Escribe su mensaje" id="msg" style="width: 380px">
          </div>
          <input type="submit" name="send" id="send" value="Enviar" class="btn btn-success btn-lg">
          <!--<input type="button" name="start_button" id="start_button" value="Record" onclick="startButton(event)" class="btn btn-info btn-lg"> -->
          <div class="btn-group">
            <button type="button" class="btn btn-lg btn-info dropdown-toggle" data-toggle="dropdown" >
              Acciones<span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" name="createRoom" data-toggle="modal" data-target="#roomModal">Crear Sala</a></li>
              <li><a href="#" name="leave" id="leave">Abandonar Sala</a></li>
              <!--<li><a href="#" name="disconnect" id="disconnect">Disconnect from chat</a></li>-->
            </ul>
          </div>
        </form>
      </div>
       <div class="col-md-3">
        <ul class="list-unstyled" id="updates" ></ul>
      </div>
    </div>
  </div>

  <!-- Modal start -->
  <div class="modal fade" id="roomModal" tabindex="-1" role="dialog" aria-labelledby="createRoomLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="createRoomLabel">Crear Sala</h4>
        </div>
        <div class="modal-body">
          Puedes crear una sala de conversaciòn. Los nombres deben ser únicos.
            <br>
          <form class="form-inline" id="createRoomForm"><input type="text" class="form-control input-lg"  placeholder="Nombre de Sala" id="createRoomName"></form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cerrar</button>
          <button data-dismiss="modal" id="createRoomBtn" class="btn btn-success btn-lg">Crear Sala</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal end -->            @show
                       
                    </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
         @yield('content')

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/template_vendor/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/template_vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/template_vendor/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/template_vendor/dist/js/sb-admin-2.js"></script>

        <!-- page specific plugin scripts -->
    <script src="/bkreport/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="/bkreport/assets/js/jquery.jqGrid.min.js"></script>
    <script src="/bkreport/assets/js/idioma.js"></script>
    <script src="/js/vendor/vue/vue.js"></script>
    <script src="/js/vendor/jquery.validate.js"></script>
    <script src="/js/validate.form.js"></script>
      <script src="/chat/socket.io.js"></script>  
  <script src="/chat/js/client.js"></script>

    <!-- inline scripts related to this page -->
   @yield('scripts')
</body>

</html>
