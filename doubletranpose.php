<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 2019-05-18
 * Time: 16:05
 */
=======
    function double_transpose_encrypt($input, $key1, $key2) {
        $initialText = $input;
        $textLength = strlen($input);
        $key1Length = strlen($key1);
        $key2Length = strlen($key2);
        if($textLength % $key1Length != 0) {
            for($i = 0; $i < ($key1Length - ($textLength % $key1Length)); $i++) {
                $initialText .= "_";
            }
            $textLength += $key1Length - ($textLength % $key1Length);
        }

        //Create key1 array
        $temp1 = array();
        for($i = 0; $i < $key1Length; $i++) {
            $index = $key1[$i];
            $temp1[$index] = "";
        }

        //Map string to key1 array
        $textIndex = 0;
        for($i = 0; $i < $textLength/$key1Length; $i++)  {
            foreach($temp1 as $char => $value) {
                $temp1[$char] .= $initialText[$textIndex];
                $textIndex++;
            }
        }

        $key1SortArray = str_split($key1);
        sort($key1SortArray);
        $key1Sorted = implode('', $key1SortArray);

        //Create transposed once string
        $transpose1String = "";
        for($i = 0; $i < strlen($key1Sorted); $i++) {
            $index = $key1Sorted[$i];
            $transpose1String .= $temp1[$index];
        }

        //Create key2 array
        $temp2 = array();
        for($i = 0; $i < $key2Length; $i++) {
            $index = $key2[$i];
            $temp2[$index] = "";
        }

        //Map transposed string to key2 array
        $text2Index = 0;
        for($i = 0; $i < $textLength/$key2Length; $i++)  {
            foreach($temp2 as $char => $value) {
                $temp2[$char] .= $transpose1String[$text2Index];
                $text2Index++;
            }
        }

        $key2SortArray = str_split($key2);
        sort($key2SortArray);
        $key2Sorted = implode('', $key2SortArray);

        //Create transposed twice string
        $result = "";
        for($i = 0; $i < strlen($key2Sorted); $i++) {
            $index = $key2Sorted[$i];
            $result .= $temp2[$index];
        }

        return $result;
    }

    function double_transpose_decrypt($input, $key2, $key1) {
        $initialText = $input;
        $textLength = strlen($input);
        $key1Length = strlen($key1);
        $key2Length = strlen($key2);

        if($textLength % $key2Length != 0) {
            for($i = 0; $i < ($key2Length - ($textLength % $key2Length)); $i++) {
                $initialText .= "_";
            }
            $textLength += $key2Length - ($textLength % $key2Length);
        }

        $key2SortArray = str_split($key2);
        sort($key2SortArray);
        $key2Sorted = implode('', $key2SortArray);

        //Create first array
        $temp2 = array();
        for($i = 0; $i < $key2Length; $i++) {
            $index = $key2Sorted[$i];
            $temp2[$index] = "";
        }


        $text2Index = 0;
        foreach($temp2 as $char => $value) {
            for($i = 0; $i < $textLength/$key2Length; $i++)  {
                $temp2[$char] .= $initialText[$text2Index];
                $text2Index++;
            }
        }

        $transpose2String = "";
        for($i = 0; $i < $textLength/$key2Length; $i++) {
            for($j = 0; $j < $key2Length; $j++) {
                $index = $key2[$j];
                $transpose2String .= $temp2[$index][$i];
            }
        }

        $key1SortArray = str_split($key1);
        sort($key1SortArray);
        $key1Sorted = implode('', $key1SortArray);

        $temp1 = array();
        for($i = 0; $i < $key1Length; $i++) {
            $index = $key1Sorted[$i];
            $temp1[$index] = "";
        }

        $text1Index = 0;
        foreach($temp1 as $char => $value) {
            for($i = 0; $i < $textLength/$key1Length; $i++)  {
                $temp1[$char] .= $transpose2String[$text1Index];
                $text1Index++;
            }
        }

        $result = "";
        for($i = 0; $i < $textLength/$key1Length; $i++) {
            for($j = 0; $j < $key1Length; $j++) {
                $index = $key1[$j];
                $result .= $temp1[$index][$i];
            }
        }

        $result = substr($result, 0, $textLength - ($key2Length - (strlen($input) % $key2Length)));

        return $result;

    }


>>>>>>> 9c5d07950b64de4f9f061b8d3ae156a5960754c4
