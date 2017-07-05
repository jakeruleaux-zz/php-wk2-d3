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
        function makeAnagram_two($input_list)
        {
            $sorted_list_array = array();
            $list_of_words = explode(" ", $input_list);
            foreach ($list_of_words as $word) {
              $anagram_array = str_split($word);

              sort($anagram_array);
              $final_word = implode("", $anagram_array);
              array_push($sorted_list_array, $final_word);
              }
              return $sorted_list_array;
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
