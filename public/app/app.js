 var socket = io.connect('http://192.168.0.154:3000');
new Vue({
	el: '#notifications',
	data:{
		name: 'Jhoe doe'
	},
	ready:  function()
	{
		this.GetNotifications();

	},
	methods: {
		GetNotifications:  function()
		{
			
			
		    socket.on("comment-was-created", function(message){
		    	var counter = 0;
		        counter = counter +1;
		         console.log(counter);
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