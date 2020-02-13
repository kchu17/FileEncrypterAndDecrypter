<?php
    function simple_sub($input, $alphabet, $key) {
        if (strlen($key) != 26 or strlen($alphabet) != 26) {
            return "Key must be 26 characters in length";
        }
        $lowered_input = strtolower($input);
        $result = "";
        for($i = 0; $i < strlen($input); $i++) {
            $alph_index = strpos($alphabet, $lowered_input[$i]);
            $new_char = $key[$alph_index];
            $result .= $new_char;
        }

        return $result;
    }

    function simple_sub_encrypt($input, $key) {
        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        return simple_sub($input, $alphabet, $key);
    }

    function simple_sub_decrypt($input, $key) {
        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        return simple_sub($input, $key, $alphabet);
    }



