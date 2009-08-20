// mini jQuery plugin that formats to two decimal places
(function($) {
	$.fn.FormatoMoneda = function() {
		this.each( function( i ) {
			$(this).change( function( e ){
				if( isNaN( parseFloat( this.value ) ) ) return;
				this.value = parseFloat(this.value).toFixed(2);
			});
		});
		return this; //for chaining
	}
})( jQuery );

