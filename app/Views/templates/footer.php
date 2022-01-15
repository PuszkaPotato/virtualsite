<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="/js/forms_send.js"/></script>
<!-- Slick -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.min.js"/></script>
<script type="text/javascript" src="/js/slick/slick.min.js"></script>

<script type="text/javascript">
    $('.partners').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false
    });
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 30000,
        arrows: false
    });

    // Change slider on item click
    $(".navbar-nav .nav-item-slider").click(function(e){
        e.preventDefault();
        slideIndex = $(this).index();
        $('.slider').slickGoTo(parseInt(slideIndex));
    });

    // Set active class to first item
    $('.navbar-nav .nav-item').eq(0).addClass('active');

    // Change active item
    $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      var mySlideNumber = nextSlide;
      $('.navbar-nav .nav-item').removeClass('active');
      $('.navbar-nav .nav-item').eq(mySlideNumber).addClass('active');
    });
</script>
</body>