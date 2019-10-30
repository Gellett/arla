<?php
/*
Template Name: IndtastTemplate
*/
?>


<!DOCTYPE html>
<html lang="da">
<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://gellett.nu/arla/wp-content/themes/astra-child/js.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Mit forbrug</title>
</head>
<body>

    <div id="header_shadow"></div>
     <header>
        <a href="side1.html"><img id="logo" src="http://gellett.nu/arla/wp-content/themes/astra-child/Logo.png" alt="Arla logo"></a>
    </header>

    <main>
        <div class="section" id="side2_section">
            <div id="mobile_show">
                <h1>Mit forbrug</h1>
                <div id="procent_section">
                    <img src="http://gellett.nu/arla/wp-content/themes/astra-child/CO2_emblem.png" alt="CO2 emblem">
                    <span>48%</span>
                </div>

                <div id="progress_section">
                    <progress max="100" value="48"></progress>
                    <p>Nå 100% og optjen <span>CO2-</span>mærket på din mælk.</p>
                </div>
            </div>

            <div id="formular">
                <?php dynamic_sidebar('header-widget'); ?>
            </div>

        </div>

        <h1 id="desktop_h1_side2">Mit forbrug</h1>
        <div id="desktop_show">

            <div id="procent_section_desktop">
                <img src="http://gellett.nu/arla/wp-content/themes/astra-child/CO2_emblem.png" alt="CO2 emblem">
                <span>48%</span>
            </div>

            <div id="progress_section_desktop">
                <progress max="100" value="48"></progress>
                <p>Nå 100% og optjen <span>CO2-</span>mærket på din mælk.</p>
            </div>
        </div>



    </main>

    <nav>
        <img id="nav_logo" src="http://gellett.nu/arla/wp-content/themes/astra-child/Logo.png" alt="logo">
        <div class="nav_ikon" id="nav_ikon1">
            <a href="/oversigt">
                <img src="http://gellett.nu/arla/wp-content/themes/astra-child/ikon_oversigt.png" alt="oversigt_ikon">
                <p style="text-decoration: underline">Oversigt</p>
            </a>
        </div>


        <div class="nav_ikon" id="nav_ikon2">
             <a href="/mit_forbrug">
                <img src="http://gellett.nu/arla/wp-content/themes/astra-child/ikon_mit_forbrug.png" alt="mit_forbrug_ikon">
                <p>Mit forbrug</p>
             </a>
        </div>

        <div class="nav_ikon" id="nav_ikon3">
            <a href="/faellesskab">
                <img src="http://gellett.nu/arla/wp-content/themes/astra-child/ikon_benchmark.png" alt="fællesskab_ikon">
                <p>Fællesskab</p>
            </a>
        </div>
    </nav>

</body>
</html>


<style>
<?php include 'style.css'; ?>
</style>









