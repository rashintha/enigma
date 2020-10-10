<?php
    if (!defined('enigma')) {
        header('HTTP/1.0 403 Forbidden');
        die('403 Forbidden');
    }
?>

<script>
    const routes = [
        { 
            path: '/404',
            component: E404_COMPONENT, 
            meta: { 
                version: '<?php echo $version; ?>'
            }
        },
        { 
            path: '*',
            redirect: '/404'
        }
    ];
</script>