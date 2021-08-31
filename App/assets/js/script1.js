$(document).ready(function(){
    

    $('.js--section-features').waypoint(function(direction) {
        if (direction == "down"){
            $('nav').addClass('sticky');
        }
        else{
            $('nav').removeClass('sticky');
        }
    }, {
        offset:'60px;'
    });
    

    $('.js--scroll-to-plans').click(function(){
       $('html,body').animate({scrollTop: $('.js--section-plans').offset().top},1000); 
    });
    
    $('.js--scroll-to-start').click(function(){
       $('html,body').animate({scrollTop: $('.js--section-features').offset().top},1000); 
    });
    
  
    $('a[href*="#"]').on('click', function (e) {e.preventDefault();
        $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top}, 1000, 'linear');
    });
    
    
 
    $('.js--wp-1').waypoint(function(direction){
        $('.js--wp-1').addClass('animated fadeIn');
    },{
        offset:'50%'
    });
    
    $('.js--wp-2').waypoint(function(direction){
        $('.js--wp-2').addClass('animated fadeInUp');
    },{
        offset:'50%'
    });
    
    $('.js--wp-3').waypoint(function(direction){
        $('.js--wp-3').addClass('animated fadeIn');
    },{
        offset:'50%'
    });
    
    $('.js--wp-4').waypoint(function(direction){
        $('.js--wp-4').addClass('animated pulse');
    },{
        offset:'50%'
    });
    
    $('.js--nav-icon').click(function(){
       var nav=$('.js--main-nav');
       var icon=$('.js--nav-icon i');
        
       nav.slideToggle(200);
        if(icon.hasClass('ion-navicon-round')){
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
        } else{
            icon.removeClass('ion-close-round');
            icon.addClass('ion-navicon-round');
        }
    });
    
});

















