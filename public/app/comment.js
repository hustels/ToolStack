vm = new Vue({
	el: '#app',
	data: {
		title: '',
		description: '',
		PageTitle: 'Lista de comentarios',
		comments: [],
		search: '',
		comment_id: ''
	},
	ready: function()
	{
		// Hide comment form by default
		$('#CommentForm').hide();
		this.CommentForm();
		// Get all comments
		this.GetComments();
		$('#CommentsList').hide(); 
		
	},
	methods:{
		add:  function(e)
		{
			//e.preventDefault();
			/*$.ajax({
			  type: "POST",
			  url: '/comments/add',
			  data: {title:  this.title , description: this.description},
			  success: function(response){
			  

			  }
			});*/
			
			
		},
		CommentForm: function()
		{
			$( "#AddComment" ).click(function() {
				vm.PageTitle = 'Añadir comentario';
  				$("#CommentForm").slideDown();

			});
		},
		GetComments: function()
		{
			$.get( "comments/all", function( data ) {
			vm.comments = data;
			  for (var i = 0; i <= vm.comments.length; i++) {
			vm.comments[i].created_at = moment(vm.comments[i].created_at).locale('es').fromNow();
			  	console.log(moment(vm.comments[i].created_at).locale('es').fromNow());
			  }

			});
		},
		RemoveComment: function(id)
		{
			$.ajax({
			  type: "POST",
			  url: '/comments/remove',
			  data: {id:  id},
			  success: function(response){
			  
			  	//console.log(response);
			  	vm.GetComments();
			  }
			});
		},
		// Mark a comment as read
		markAsRead:  function(id)
		{
			this.comment_id = id;
			//return false;

			$.ajax({
			  type: "POST",
			  url: '/comments/markasread',
			  data: {id:  id},
			  success: function(response){
			  return false;
			  	//console.log(response);
			  	vm.GetComments();
			  }
			});
			console.log('Va iunt');


		}
	}
})