<? 
include 'session.php'; 
    ?>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript" src="scripts/progress-circle.js"></script>
<script>
$('.owl-carousel-1').owlCarousel({
    stagePadding:15,
    loop:false,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
$('.owl-carousel-2').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:4
        },
        600:{
            items:6
        },
        1000:{
            items:8
        }
    }
})
jQuery(function($) {
     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
     $('#footer-bar a').each(function() {
        $(this).removeClass('active-nav');
      if (this.href === path) {
       $(this).addClass('active-nav');
      }
     });
    });
$('#profile-pic').on('click', function() {
    $('#file-input').trigger('click');
});
    
    
    $.post("ajax.php",
    function(data,status){
        
        var obj=JSON.parse(data);
        per = obj.per;
        $('#circle').progressCircle({
                    nPercent        : per,
                    showPercentText : true,
                    circleSize      : 150,
                    thickness       : 3
    });
});
    
    
    
    
    
    
    
/*$('#circle').progressCircle({
nPercent        : 50,
showPercentText : true,
circleSize      : 150,
thickness       : 3
});*/
</script>
</body>