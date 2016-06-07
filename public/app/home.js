 var socket = io.connect('http://192.168.0.154:3000');
var vm = new Vue({
	el: '#comments',
	data:{
		name: 'Jhoe doe',
		unreadComments: '',
		newNotifications: {}
	},
	ready:  function()
	{
		
		// Get unread comments
		this.UnreadComments();

		// Get notifications
		this.GetNotifications();

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
			  	//console.log(response);
			  	vm.unreadComments = response;
			  }
			});
			
		},

		// Añadir al panel de notificaciones cuando llegue cualquier 
		GetNotifications:  function()
		{

		    socket.on("comment-was-created", function(message){
		         
		         //vm.newNotifications.push(message);
		         vm.newNotifications = message;
		         console.log(vm.newNotifications);
		         //alert(message);
		         $(document).ready(function(){
		         	$.notify({
			        icon: 'glyphicon glyphicon-comment',
			        message:  'Ha llegado un nuevo comentario',//message.data,
		        
		        	});
		         })
		         
		     });

		}
	}
})