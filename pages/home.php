<?php
    $global_variable = "MSD700_bucket_MCLA007A_00_2.glb";
    // if (isset($_GET['value'])) {
    //     $value = urldecode($_GET['value']);
    //     $global_variable = $value;
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Smart Presentation</title>
        <link rel="icon" type="image/x-icon" href="assets/logo.png">
        <meta charset="UTF-8">
        <script type="importmap">
            {
                "imports": {
                "three": "https://unpkg.com/three@0.139.2/build/three.module.js"
                }
            }
        </script>
        <link rel="stylesheet" href="./style/style.css" >
        <link rel="stylesheet" href="./style/home.css" >
    </head>
    <body>
        <div class="home-page">
            <canvas id="myCanvas">    </canvas>

            <div class="container-top-left">
                <button class="menu-container" onClick="location.href='databases'">
                    <img src="./assets/Menu.png">
                </button>

                <div class="page-name-container">
                    <div class="page-name-text">N-Presentation</div>
                </div>
            </div>

            <div class="item-name-container">
                <p id="myText" class="text-file-name"><?php echo $global_variable; ?></p>
            </div>

            <div class="container-bottom-left">
                <div class="menu-container-blue-information">
                    <img src="./assets/Information-Button.png">
                </div>
                <div class="menu-container-blue-sound">
                    <img src="./assets/Sound-Off-Button.png" id="sound-off">
                    <img src="./assets/Sound-On-Button.png" id="sound-on" style="display: none;">
                </div>
                <div class="menu-container-blue-animation">
                    <img src="./assets/Animation-Off-Button.png" id="animation-off">
                    <img src="./assets/Animation-On-Button.png" id="animation-on" style="display: none;">
                </div>
            </div>

            <div class="container-bottom-right">
                <div class="menu-container-blue-album">
                    <img src="./assets/Album-Button.png">
                </div>
                <div class="menu-container-blue-lightning">
                    <img src="./assets/Lightning-Button.png">
                </div>
                <div class="toggle"></div>
            </div>
        </div>

        <script type="module" src="script.js"> </script>
        <script type="module" src="./js/toggle.js"></script>
        <script type="module" src="./js/menu-button.js"></script>
    </body>
</html>

