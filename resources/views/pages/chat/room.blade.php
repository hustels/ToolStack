@extends('base')

@section('content')
	
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
@endsection('section')
@section('scripts')
 <script src="/js/vendor/jquery.validate.js"></script>
    <script src="/js/validate.form.js"></script>
     <script src="/chat/socket.io.js"></script>  
 <script src="/chat/js/client.js"></script>
@endsection
   