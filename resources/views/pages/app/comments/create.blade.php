@extends('base')

@section('content')
<div id="app">
	<div class="row">

	<div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-2" >
		<h3>@{{PageTitle}}</h3> 
		<button class="ui primary button" id="AddComment">Añadir </button>
		<hr>
		<!-- Display session message -->
		@if (Session::has('created'))
			<div class="alert alert-success">
  			<p>{{Session::get('created') }}</p>
			</div>
		@endif
		<!--  Display errors -->
		@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
		@endif
	<!-- Create form-->
		<form action="/comments/add" method="post" v-on:submit="add($event)" id="CommentForm">
		  <div class="form-group">
		    <label for="title">Titulo </label>
		    <input type="text" class="form-control" id="title" 
		    placeholder="Titulo" name="title" v-model="title"
		    >
		  </div>
		  <div class="form-group">
		    <label for="description">Descripción</label>
		    <textarea class="form-control" rows="3" 
		    name="description" id="description" v-model="description"
		    >
		    </textarea>
		  </div>
		  <button type="submit" class="btn btn-primary" >Añadir</button>
		</form>
		<!-- Display list of comments-->
		<div class="ui search">
		  <div class="ui icon input">
		    <input class="prompt" type="text" v-model="search" placeholder="Buscar...">
		    <i class="search icon"></i>
		  </div>
		  <div class="results"></div>
		</div>
		<div class="ui celled list" v-for="comment in comments | filterBy search ">
		  <div class="item">
		  	    <div class="right floated content">
      				<div class="ui red button" @click="RemoveComment(comment.id)">Borrar</div>
    			</div>
		   <!-- <img class="ui avatar image" src="#"> -->
		    <div class="content">
		      <div class="header">@{{comment.title}}</div>
		      @{{comment.description}}
		    </div>
		  </div>
		</div>


	</div>
</div>
</div>
@endsection
@section('scripts')
<script src="app/comment.js"></script>
@endsection