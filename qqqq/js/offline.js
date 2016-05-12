if(window.applicationCache){
	window.applicationCache.addEventListener('updateready', function(e) {  
		if (window.applicationCache.status == window.applicationCache.UPDATEREADY) {
			applicationCache.swapCache()
			window.location.reload(); 
		} else {  

		}  
	}, false);

	window.applicationCache.addEventListener('error', function(e) {
		return false;
	}, false);  
}