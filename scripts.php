<!--  Scripts-->

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
    $(document).ready(function () {

        (function ($) {
            $(function () {

                $('.dropdown-button').dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    hover: true,
                    belowOrigin: true,
                    alignment: 'right'

                }
                );

            });
        })(jQuery);

    });

    function openCity(cityName, elmnt, color, textcolor) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(cityName).style.display = "block";
        elmnt.style.backgroundColor = color;

    }

    document.getElementById("defaultOpen").click();
    $('.slider').slider({
        height: 400,
        indicators: false,
        interval: 15000
    });


    $('.next').click(function () {
        $('.slider').slider('next');
    });
    $('.prev').click(function () {
        $('.slider').slider('prev');
    });


</script>
</body>
</html>