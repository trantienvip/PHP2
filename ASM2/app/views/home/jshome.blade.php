<script>
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            autoplay:true,
            autoplayTimeout:1800,
            autoplayHoverPause:true,
        },
        600: {
            items: 3,
            nav: false,
            autoplay:true,
            autoplayTimeout:1800,
            autoplayHoverPause:true
        },
        1000: {
            items: 5,
            nav: false,
            loop: false,
            autoplay:true,
            autoplayTimeout:1800,
            autoplayHoverPause:true
        }
    }
})
</script>