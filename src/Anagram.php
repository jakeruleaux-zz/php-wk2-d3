<?php

    class AnagramMaker
    {
        function makeAnagram($input_word)
        {
            $str = $input_word;
            $letters= str_split($str);
            sort($letters);
            $result = array();
            foreach ($letters as $letter) {
            array_push($result, $letter);
            }
            
            return implode($result);

        }


    }

 ?>
