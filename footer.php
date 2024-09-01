<?php include get_template_directory() . '/template-parts/footer/footer-section.php' ;?> 
<?php wp_footer(); ?>

<script>
    let addClassMEnuLI = document.querySelectorAll('.page_item');
    let addClassMEnua = document.querySelectorAll('.page_item a');
    for(let item of addClassMEnuLI){
        item.classList.add('nav-item')
    }
    for(let item of addClassMEnua){
        item.classList.add('nav-link')
    }


    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


<!-- //tesimonials-->
<script>
    $(document).ready(function() {
        $("#owl-demo1").owlCarousel({
            loop: true,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                }
            }
        })
    })

</script>
<!-- //tesimonials-->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->
</body>
</html>
