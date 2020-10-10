<?php
    /*
     * Enigma Framework
     * 
     */

    define('enigma', True);

    include_once 'configurations.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enigma Framework</title>

    <!-- Vue -->
    <?php if(dev){ ?>
    <script src="app/plugins/vue/vue.dev.js"></script>
    <?php }else{ ?>
    <script src="app/plugins/vue/vue.min.js"></script>
    <?php } ?>
    <script src="app/plugins/vue/vue-router.js"></script>

    <!-- Common Functions -->
    <script src="app/assets/js/functions.js?v<?php echo $version; ?>"></script>
</head>
<body>

</body>
</html>