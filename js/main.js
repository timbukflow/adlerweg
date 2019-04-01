$(document).ready(function () {
    
///////////////// nav ///////////////// 
    
	$('#navburger').click(function(){
		$(this).toggleClass('open');
        $('.nav').fadeToggle(1000);
        $('.nav ul').toggleClass('up');
        $('.nav li').toggleClass('open');
	});
    
    $('.bookmark').click(function(e) {
	e.preventDefault();
        
        var position = $($(this).attr('href')).offset().top;
        
        $('#navburger').removeClass('open');
        $('.nav').fadeToggle(1000);
        $('.nav ul').removeClass('up');
        $('.nav li').removeClass('open');
        $("body, html").animate({
            scrollTop: position
        }, 2000);
    });
    
    
///////////////// Sroll resizing Navigation ///////////////// 
    
    $(document).on('scroll', function () {
        if ($(document).scrollTop() > 10) {
            $('.nav-logo').css('paddingTop', '20px');
            $('.nav-logo').css('width', '150px');
            $('#navburger').css('margin', '45px 50px 40px 40px');
        }   
        else {
            $('.nav-logo').css('paddingTop', '30px');
            $('.nav-logo').css('width', '180px');
            $('#navburger').css('margin', '55px 50px 50px 50px');
        }
    });
    
    
///////////////// slider ///////////////// 
    
    setInterval(function () {
        $('.overimg').fadeOut(1500).delay(5000).fadeIn(1500).delay(5000);
    }, 5000);
    
    
///////////////// show and hide ///////////////// 
    
    $(".togglebox").hide();
    $(".togglebutton").click(function(){
        var x = $(this).prev(".togglebox").css("display");  
        if(x=="block")
            $(this).text("\53");
        else
            $(this).text("\u2013");
            $(this).prev(".togglebox").slideToggle("slow");
        return true;
    });
    
    
///////////////// impressum ///////////////// 

    $('.togglelink').click(function() {
        var totoggle = $(this).attr("data-toggle");
        $(totoggle).toggle();
        
        if ($(totoggle).is(":visible")) {
            $('html,body').animate({scrollTop:$(totoggle).offset().top}, 1000);
        }     
    });

    
///////////////// Page Load ///////////////// 
    
    $('.pagefadein').fadeOut(1000);
    
});