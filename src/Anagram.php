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
        function makeAnagram_two($result, $input_list)
        {

            $list_of_words = explode(" ", $input_list);
            $anagram = array();
            sort($list_of_words);
            foreach ($list_of_words as $word) {
                if ($word == $result) {
                  array_push($anagram, $word);
                }

                return $anagram;
            }
        }

            // return join($result);


        // }
        // function makeAnagram($input_list, $input_word)
        // {
        //     $anagram_word = str_split($input_word);
        //     $list_of_words = str_split($input_list);
        //
        //
        //     }
        //
        //     return join($result);
        // }
    // }
  }
 ?>
