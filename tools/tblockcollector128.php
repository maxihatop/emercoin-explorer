<?php
while(true) {
// sleep 20 sec and run again
sleep(20);
exec('php /var/www/emercoin-explorer/tools/tget_blocks128.php');
}
?>
