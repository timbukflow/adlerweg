$(document).ready(function () {

    
///////////////// nav ///////////////// 
    
	$('#navburger').click(function(){
		$(this).toggleClass('open');
        $('.nav').fadeToggle(1000);
        $('.nav ul').toggleClass('up');
        $('.nav li').toggleClass('open');
        $('h4').toggleClass('navon')
        $('body').toggleClass('noscroll')
	});

///////////////// Sroll resizing Navigation ///////////////// 
    
    $(document).on('scroll', function () {
        if ($(document).scrollTop()) {
            $('.logo').css('width', '102px');
            $('#navburger').css('margin', '22px 0px');
            $('h1.header').css('fontSize', '20px');
            $('.logocontainer').css('padding', '14px 30px');
            $('.phone, .mail').css('margin', '18px 40px 18px 0px');
        }   
        else {
            $('.logo').css('width', '130px');
            $('#navburger').css('margin', '28px 0px');
            $('h1.header').css('fontSize', '24px');
            $('.logocontainer').css('padding', '22px 45px');
            $('.phone, .mail').css('margin', '24px 40px 24px 0px');
        }
    });

    ///////////////// fade in ///////////////// 
    
        $(window).scroll(function() {
        $('.inview').each(function(i) {
            var bottom_of_object = $(this).offset().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ) {
                $(this).addClass('inview-fade');
            } else {
                $(this).removeClass('inview-fade');
            }
        }); 
    }).scroll();
});