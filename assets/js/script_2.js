function getAnchor(url)
					{
    					var index = url.lastIndexOf('#');
    					if (index != -1)
        					return url.substring(index);
        					
        					}
        	var currentAnchor = getAnchor(location.href);    	     
         $(currentAnchor).addClass('in');
