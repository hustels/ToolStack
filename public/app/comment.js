vm = new Vue({
	el: '#app',
	data: {
		title: '',
		description: '',
		PageTitle: 'Lista de comentarios',
		comments: [],
		search: ''
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
			$.ajax({
			  type: "POST",
			  url: '/comments/add',
			  data: {title:  this.title , description: this.description},
			  success: function(response){
			  

			  }
			});
			
			
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
			  //console.log(data);
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
		}
	}
})