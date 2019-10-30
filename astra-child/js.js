$(function() {


    $("#nav_logo").on('click', function () {
         $("#embed_chart > div > canvas").css({"width": "400px !important", "height": "200px !important"});
    });


    /*--------*/
    /* Side 1 */
    /*--------*/

    $("#x_settings").on('click', function () {
        $("#settings").css({"display":"none"});
        $("body").css({"overflow":"unset"});
    });

    $(".settings_wheel").on('click', function () {
        $("#settings").css({"display":"block"});
        $("body").css({"overflow":"hidden"});
    });




    /*--------*/
    /* Side 2 */
    /*--------*/


    filter = false;


        $("#dropbtn").on('click', function () {
            if (filter === false){
                $(".drop_tekst").css({"display":"block"});
                $("#dropbtn img").css({"transform":"rotate(180deg)", "top":"0"});
                filter = true;
            } else {
                $(".drop_tekst").css({"display": "none"});
                $("#dropbtn img").css({"transform":"rotate(0deg)", "top":"10px"});
                filter = false;
            }
        });



    /*--------*/
    /* Side 3 */
    /*--------*/

    $("#x_settings").on('click', function () {
        $("#emblem_settings").css({"display":"none"});
        $("#farm_settings").css({"display":"none"});
        $("body").css({"overflow":"unset"});
    });

    $(".empty_emblem").on('click', function () {
        $("#emblem_settings").css({"display":"flex"});
        $("body").css({"overflow":"hidden"});
    });


    $("#x_farm_settings").on('click', function () {
        $("#farm_settings").css({"display":"none"});
        $("body").css({"overflow":"unset"});
    });

    $(".top_farm").on('click', function () {
        $("#farm_settings").css({"display":"block"});
        $("body").css({"overflow":"hidden"});
    });

});