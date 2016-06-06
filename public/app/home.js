 var socket = io.connect('http://192.168.0.154:3000');
var vm = new Vue({
	el: '#comments',
	data:{
		name: 'Jhoe doe',
		unreadComments: ''
	},
	ready:  function()
	{
		
		// Get unread comments
		this.UnreadComments();

	},
	methods: {
		// Los comentarios no leidos
		UnreadComments:  function()
		{
			$.ajax({
			  type: "GET",
			  url: '/comments/unread',
			  data: {title:  this.title , description: this.description},
			  success: function(response){
			  	console.log(response);
			  	vm.unreadComments = response;
			  }
			});
			
		}
	}
})