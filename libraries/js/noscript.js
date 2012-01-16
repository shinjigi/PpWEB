function addLoadEvent(func) {
	var oldonload = window.onload;
	if( typeof window.onload !== 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if(oldonload) {
				oldonload();
			}
			func();
		};
	}
}

var noscript = addLoadEvent(noscript);


/*
addLoadEvent(function() {
	//	more code to run on page load
});
*/



function noscript() {// se il metodo "removeChild" dell "user agent" è supportato continuo e disabilito il div #noscript
	if(document.removeChild) {
		var div = document.getElementById("noscript");
		div.parentNode.removeChild(div);

		if(document.getElementById)// continuo e verifico che funzioni anche il metodo  "getElementById"
		{
			document.getElementById("wrapper").style.display = "block";		// abilito la visualizzazione della pagina
		} else {
			var div = document.getElementById("wrapper");					// altrimenti cancello tutto il #wrapper
			div.parentNode.removeChild(div);
		}
	}
}