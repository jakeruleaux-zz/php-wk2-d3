<?php

    require_once "src/Anagram.php";

    class AnagramMakerTest extends PHPUnit_Framework_TestCase
    {
        function test_makeAnagram()
        {
            $test_AnagramMaker = new AnagramMaker;
            $input = "bat";

            $result =
            $test_AnagramMaker->makeAnagram($input);

            $this->assertEquals("abt", $result);
        }


    }

 ?>
