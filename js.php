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

function popUpDanger($message) {
    echo <<<EOT
    
<script type="text/javascript">
    BootstrapDialog.show({
        message: '$message',
        type: BootstrapDialog.TYPE_DANGER,
        title: 'Figyelem!'
    });
</script>    
EOT;
}

