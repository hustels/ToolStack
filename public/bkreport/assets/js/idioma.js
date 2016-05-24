;(function($){
/**
 * jqGrid English Translation
 * Tony Tomov tony@trirand.com
 * http://trirand.com/blog/ 
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
**/
$.jgrid = $.jgrid || {};
$.extend($.jgrid,{
	defaults : {
		recordtext: "Vista {0} - {1} de {2}",
		emptyrecords: "No hay registros",
		loadtext: "Cargando...",
		pgtext : "Page {0} of {1}"
	},
	search : {
		caption: "Buscar...",
		Find: "Buscar",
		Reset: "Resetear",
		odata: [{ oper:'eq', text:'igual'},{ oper:'ne', text:'no es igual'},{ oper:'lt', text:'menor'},{ oper:'le', text:'menor o igual'},{ oper:'gt', text:'mayor'},{ oper:'ge', text:'mayor or igual'},{ oper:'bw', text:'empieza por'},{ oper:'bn', text:'no empieza por'},{ oper:'in', text:'esta en'},{ oper:'ni', text:'no esta en'},{ oper:'ew', text:'termina por'},{ oper:'en', text:'no termina por'},{ oper:'cn', text:'contiene'},{ oper:'nc', text:'no contiene'},{ oper:'nu', text:'es nulo'},{ oper:'nn', text:'no es nulo'}],
		groupOps: [{ op: "AND", text: "todos" },{ op: "OR",  text: "cualquier" }],
		operandTitle : "Haga click para seleccionar operacion de busqueda.",
		resetTitle : "Resetear valor de busqueda"
	},
	edit : {
		addCaption: "Añadir registro",
		editCaption: "Editar registro",
		bSubmit: "Submit",
		bCancel: "Cancelar",
		bClose: "Cerrar",
		saveData: "Los datos han sido modificados! Guardar cambios?",
		bYes : "Si",
		bNo : "No",
		bExit : "Cancelar",
		msg: {
			required:"Este campo es requerido",
			number:"Por favor, introduzca un numero valido",
			minValue:"value must be greater than or equal to ",
			maxValue:"value must be less than or equal to",
			email: "is not a valid e-mail",
			integer: "Please, enter valid integer value",
			date: "Please, enter valid date value",
			url: "is not a valid URL. Prefix required ('http://' or 'https://')",
			nodefined : " is not defined!",
			novalue : " return value is required!",
			customarray : "Custom function should return array!",
			customfcheck : "Custom function should be present in case of custom checking!"
			
		}
	},
	view : {
		caption: "Vista del registro",
		bClose: "Cerrar"
	},
	del : {
		caption: "Borrar",
		msg: "Quires borrar el/los registros seccionados(s)?",
		bSubmit: "Borrar",
		bCancel: "Cancelar"
	},
	nav : {
		edittext: "",
		edittitle: "Editar el registro  seleccionado",
		addtext:"",
		addtitle: "Añadir nuevo registro",
		deltext: "",
		deltitle: "Borrar registro seleccionado",
		searchtext: "",
		searchtitle: "Buscar registros",
		refreshtext: "",
		refreshtitle: "Recargar",
		alertcap: "Warning",
		alerttext: "Por favor, seleccione fila",
		viewtext: "",
		viewtitle: "Vista de fila seleccionada"
	},
	col : {
		caption: "Seleccionar columnas",
		bSubmit: "Ok",
		bCancel: "Cancelar"
	},
	errors : {
		errcap : "Error",
		nourl : "No esta definido la url",
		norecords: "No hay registros que procesar",
		model : "Length of colNames <> colModel!"
	},
	formatter : {
		integer : {thousandsSeparator: ",", defaultValue: '0'},
		number : {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 2, defaultValue: '0.00'},
		currency : {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 2, prefix: "", suffix:"", defaultValue: '0.00'},
		date : {
			dayNames:   [
				"Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat",
				"Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
			],
			monthNames: [
				"Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec",
				"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
			],
			AmPm : ["am","pm","AM","PM"],
			S: function (j) {return j < 11 || j > 13 ? ['st', 'nd', 'rd', 'th'][Math.min((j - 1) % 10, 3)] : 'th';},
			srcformat: 'Y-m-d',
			newformat: 'n/j/Y',
			parseRe : /[#%\\\/:_;.,\t\s-]/,
			masks : {
				// see http://php.net/manual/en/function.date.php for PHP format used in jqGrid
				// and see http://docs.jquery.com/UI/Datepicker/formatDate
				// and https://github.com/jquery/globalize#dates for alternative formats used frequently
				// one can find on https://github.com/jquery/globalize/tree/master/lib/cultures many
				// information about date, time, numbers and currency formats used in different countries
				// one should just convert the information in PHP format
				ISO8601Long:"Y-m-d H:i:s",
				ISO8601Short:"Y-m-d",
				// short date:
				//    n - Numeric representation of a month, without leading zeros
				//    j - Day of the month without leading zeros
				//    Y - A full numeric representation of a year, 4 digits
				// example: 3/1/2012 which means 1 March 2012
				ShortDate: "n/j/Y", // in jQuery UI Datepicker: "M/d/yyyy"
				// long date:
				//    l - A full textual representation of the day of the week
				//    F - A full textual representation of a month
				//    d - Day of the month, 2 digits with leading zeros
				//    Y - A full numeric representation of a year, 4 digits
				LongDate: "l, F d, Y", // in jQuery UI Datepicker: "dddd, MMMM dd, yyyy"
				// long date with long time:
				//    l - A full textual representation of the day of the week
				//    F - A full textual representation of a month
				//    d - Day of the month, 2 digits with leading zeros
				//    Y - A full numeric representation of a year, 4 digits
				//    g - 12-hour format of an hour without leading zeros
				//    i - Minutes with leading zeros
				//    s - Seconds, with leading zeros
				//    A - Uppercase Ante meridiem and Post meridiem (AM or PM)
				FullDateTime: "l, F d, Y g:i:s A", // in jQuery UI Datepicker: "dddd, MMMM dd, yyyy h:mm:ss tt"
				// month day:
				//    F - A full textual representation of a month
				//    d - Day of the month, 2 digits with leading zeros
				MonthDay: "F d", // in jQuery UI Datepicker: "MMMM dd"
				// short time (without seconds)
				//    g - 12-hour format of an hour without leading zeros
				//    i - Minutes with leading zeros
				//    A - Uppercase Ante meridiem and Post meridiem (AM or PM)
				ShortTime: "g:i A", // in jQuery UI Datepicker: "h:mm tt"
				// long time (with seconds)
				//    g - 12-hour format of an hour without leading zeros
				//    i - Minutes with leading zeros
				//    s - Seconds, with leading zeros
				//    A - Uppercase Ante meridiem and Post meridiem (AM or PM)
				LongTime: "g:i:s A", // in jQuery UI Datepicker: "h:mm:ss tt"
				SortableDateTime: "Y-m-d\\TH:i:s",
				UniversalSortableDateTime: "Y-m-d H:i:sO",
				// month with year
				//    Y - A full numeric representation of a year, 4 digits
				//    F - A full textual representation of a month
				YearMonth: "F, Y" // in jQuery UI Datepicker: "MMMM, yyyy"
			},
			reformatAfterEdit : false
		},
		baseLinkUrl: '',
		showAction: '',
		target: '',
		checkbox : {disabled:true},
		idName : 'id'
	}
});
})(jQuery);
