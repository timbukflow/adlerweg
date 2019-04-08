$(document).ready(function () {
    
///////////////// nav ///////////////// 
    
	$('#navburger').click(function(){
		$(this).toggleClass('open');
        $('.nav').fadeToggle(1000);
        $('.nav ul').toggleClass('up');
        $('.nav li').toggleClass('open');
	});
    

});