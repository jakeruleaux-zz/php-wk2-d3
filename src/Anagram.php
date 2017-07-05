<?php

    class AnagramMaker
    {
        function makeAnagram($input_word)
        {
            $str = $input_word;
            $array = str_split($str);
            return $array;

        }
    }

 ?>
