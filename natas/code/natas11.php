<?php
    function xor_encrypt($text, $key) {
        $outText = '';
        for ($i=0; $i<strlen($text); $i++) {
            $outText .= $text[$i] ^ $key[$i % strlen($key)];
        }
        return $outText;
    }

    $default_data = array("showpassword"=>"no", "bgcolor"=>"#ffffff");
    $cookie_data = "MGw7JCQ5OC04PT8jOSpqdmkgJ25nbCorKCEkIzlscm5oKC4qLSgpbjY=";

    // Find the key used in XOR on the server side
    $xor_key = xor_encrypt(json_encode($default_data), base64_decode($cookie_data));
    $xor_key = substr($xor_key, 0, 4);  // KNHL

    // Set array["showpassword"] => "yes" and generate cookie data
    $default_data["showpassword"] = "yes";
    $new_cookie_data = base64_encode(xor_encrypt(json_encode($default_data), $xor_key));
    echo $new_cookie_data;
    echo "\n";
?>