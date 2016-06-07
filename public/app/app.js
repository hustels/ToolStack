 var socket = io.connect('http://192.168.0.154:3000');
var vm = new Vue({
	el: '#notifications',
	data:{
		name: 'Jhoe doe',
	},
	ready:  function()
	{
		//this.GetNotifications();

	},
	methods: {
		// Notificar cuando se añada un cometario
		GetNotifications:  function()
		{
			
			
		    socket.on("comment-was-created", function(message){
		    	
		         console.log(message);
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