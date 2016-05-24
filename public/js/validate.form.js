$(document).ready(function(){

		$('#FrmGrid_grid-table').validate({
	    rules: {

	       date: {
	       	required: true,
	      	minlength: 6
	      },
	       session: {
	       	required: true,
	      	minlength: 4
	      },
	      specification: {
	       	required: true,
	      	minlength: 7
	      },
	      type: {
	      	minlength: 6,
	        required: true
	      }
	    },
			success: function(element) {
				/*element
				.text('OK!').css('color', 'green').addClass('valid'); */
			}
	  });


		// Validar login
		$('#login_form').validate({
	    rules: {

	       username: {
	       	required: true,
	      	minlength: 3
	      },
	       password: {
	       	required: true,
	      	minlength: 6
	      }
	    
	    
	    },
			success: function(element) {
				element
				.text('OK!').css('color', 'green').addClass('valid');
			}
	  });

});