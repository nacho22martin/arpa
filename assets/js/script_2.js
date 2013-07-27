function getAnchor(url)
					{
    					var index = url.lastIndexOf('#');
    					if (index != -1)
        					return url.substring(index);
        					
        					}
        	var currentAnchor = getAnchor(location.href);    	     
         	$(currentAnchor).addClass('in');



$("#oneaccord").mouseenter(function(){
    $("#container1").shuffleLetters(); });

$("#twoaccord").mouseenter(function(){
    $("#container2").shuffleLetters(); });

$("#threeaccord").mouseenter(function(){
    $("#container3").shuffleLetters(); });

$("#fouraccord").mouseenter(function(){
    $("#container4").shuffleLetters(); });