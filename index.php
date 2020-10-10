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

    <!-- Axios -->
    <script src="app/plugins/axios/axios.min.js?v0.20.0"></script>

    <!-- Vue -->
    <?php if(dev){ ?>
    <script src="app/plugins/vue/vue.dev.js?v2.6.12"></script>
    <?php }else{ ?>
    <script src="app/plugins/vue/vue.min.js?v2.6.12"></script>
    <?php } ?>
    <script src="app/plugins/vue/vue-router.js?v3.4.3"></script>

    <!-- Common Functions -->
    <script src="app/assets/js/functions.js?v<?php echo $version; ?>"></script>

    <!-- Static Components -->
    <script src="app/components/?404&js&v<?php echo $version; ?>"></script>
</head>
<body>
    <div id="app">
        <router-view></router-view>
    </div>
</body>
</html>

<?php
    include_once 'routes.php';
?>

<script src="app/assets/js/enigma.js?v<?php echo $version; ?>"></script>