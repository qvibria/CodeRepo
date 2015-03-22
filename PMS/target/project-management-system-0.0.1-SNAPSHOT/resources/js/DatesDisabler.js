/**
 * 
 */

var DatesDisabler = {
	

	disableDatesBeforeRender : function(date) {
		if( disabledDates == undefined){
			console.log( "disabled Dates is undefined for now");
			return [true];
		}
		var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();

		for (i = 0; i < disabledDates.length; i++) {
			if ($.inArray((m + 1) + '-' + d + '-' + y, disabledDates) != -1) {
				return [ false ];
			}
		}
		return [ true ];
	}
}