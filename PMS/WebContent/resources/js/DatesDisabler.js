/**
 * 
 */

var DatesDisabler = {
	disabledDates : [],

	disableDatesBeforeRender : function(date) {
		console.log( this.disabledDates);
		var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
		for (i = 0; i < this.disabledDates.length; i++) {
			if ($.inArray((m + 1) + '-' + d + '-' + y, disabledDays) != -1) {
				return [ false ];
			}
		}
		return [ true ];
	}
}