$(document).ready(function(){

	//substr so there isn't a '#'
	var hashFilter = location.hash.substr(1);

	var mainEl = $('#main');
	var transitionDuration = 800;
	var columnWidth = 270;
	
	mainEl.isotope({
		animationEngine: 'best-available', //CSS3 if browser supports it, jQuery otherwise
		animationOptions: {
			duration: transitionDuration
		},
		containerStyle: {
			position: 'relative',
			overflow: 'visible'
		},
		masonry: {
			columnWidth: columnWidth
		}
	});	
	
	
	function setSizes(){
		var availableSpace = $(window).width();
		var potentialColumns = availableSpace/columnWidth;
		potentialColumns = Math.floor(potentialColumns);
		
		var newWidth = potentialColumns * columnWidth;

		$('.container').width(newWidth);
	}
	
	setSizes();

	
	function layoutTimer(){

		setTimeout(function(){
			mainEl.isotope('layout');
		}, transitionDuration);
		
	}

	layoutTimer();

	
	$(window).resize(function(){
	
		setSizes();
		
		layoutTimer();
		
	});

	


//turns hashFilter into an array called currentCats with the anchor tag and no #
	var currentCats = hashFilter.split(" ");


	$('#controls a').click(function(){
		//Change '#cat1' into '.cat1'
		var catClass = '.'+$(this).attr('href').substr(1);
		
		//If the current category is not in the array, add it and make the link active
		if($.inArray(catClass, currentCats)==-1){
			currentCats.splice(0, currentCats.length); 
			currentCats.push(catClass);
			$('li').removeClass('active');
			$(this).parent().addClass('active');
		}
		//If the current category is in the array, get rid of it and remove the 'active' class
		else {
			//position of the current category in the array
			position = $.inArray(catClass, currentCats); 
			currentCats.splice(position,1);
			$(this).parent().removeClass('active');
		}
		
		var newFilter = "";
		
		//generate a 'newFilter' string that will be saved into the hash
		for (current in currentCats){
			currentCat = currentCats[current];
			newFilter = newFilter + currentCat;
		}
		
		location.hash = newFilter;
		
		mainEl.isotope({
			filter: newFilter
		});
		
	});

});