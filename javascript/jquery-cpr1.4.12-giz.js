/**
* @file coppergiz\javascript\jquery-cpr1.4.12-giz.js
* @author Jeremy Crowe
* @version 150827_001
* @date 27-08-15
*/


/////// -- Menus -- ///////
// Creating a new function, fadeToggle()
$.fn.fadeToggle = function( speed, easing, callback ) {
	return this.animate( { opacity: 'toggle' }, speed, easing, callback );
};

function jc_jquery_menu_drop() {
	$( '#admin ul' ).fadeToggle( 400 );
	$( '#admin' ).toggleClass( 'open' );
}
function jc_jquery_view_drop() {
	$( ".giz_cop_sort table").fadeToggle( 400 );
	$( this ).toggleClass( 'open' );
}


$( function() {
	$( "#admin" ).hover(
		function() {
			jc_jquery_menu_drop();
		}, function() {
			jc_jquery_menu_drop();
		}
	);
	$( ".giz_cop_sort" ).hover(
		function() {
			jc_jquery_view_drop();
		}, function() {
			jc_jquery_view_drop();
		}
	);
	
	var imgsrc = "";
	$('a.adm_menu').each(function(){
		var name = $(this).text().replace(' ','_').toLowerCase();
		$(this).addClass(name);
		if( $(this).text() == 'DELETE' ){			
			$(this).attr('title',name).text('');
		}else if ($(this).text() == 'PROPERTIES' ){			
			$(this).attr('title','edit '+name).text('');
		}else{
			$(this).attr('title', name);
		}
	});
	
	var url = document.location.toString().split('?album=');
	var pageloc = '';
	if(url.length==2){
		pageloc = url[1].split('&')[0];
		//alert(pageloc);
	}else{
		pageloc = url[0].split('/');
		pageloc = pageloc[pageloc.length-1];
		pageloc = pageloc.split('?')[0];
		//alert(pageloc);
	}
	$('a').each(function(){
		if( $(this).attr('href').indexOf(pageloc) != -1)
			$(this).addClass('current');
	});
		
	
} );
