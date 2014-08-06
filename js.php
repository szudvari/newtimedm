<?php

function popUp($message) {
    echo <<<EOT
    
<script type="text/javascript">
    BootstrapDialog.show({
        message: '$message'
    });
</script>    
EOT;
}

