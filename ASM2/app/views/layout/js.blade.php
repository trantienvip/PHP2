<script src="public/bootrap/js/bootstrap.min.js"></script>
<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>

<script>
    var iconsearch = $('.iconsearch.ti-search');
    var formsearch = $('.form-search');
    iconsearch.click(function(){
        iconsearch.toggleClass('ti-search');
        iconsearch.toggleClass('ti-close');
        formsearch.toggleClass('active')
    });
    document.querySelector('.user_information_image').addEventListener('click', function(){
        $('.user_information_sm').toggleClass('active');
    })
</script>