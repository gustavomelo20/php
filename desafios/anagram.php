<?php


/**
 * Two strings are anagrams if same characters are used in both.
 * Only case insensitive characters, not spaces or punctuation should be counted.
 *
 * @method static bool check(string $first, string $second)
 * @example Anagram::check('rail safety', 'fairy tales') === true
 * @example Anagram::check('roast beef', 'goat roast') === false
 * @example Anagram::check('Elvis, 'lives') === true
 */

 /**
 * Para se um Anagrama:
 * * string x === string y 
 * 
 * Retorna True ou False
 * 
 */
 
 ///Solução burra

 $string1 = "acne";
 $string2 = "cnea";

 $x = str_split (strtolower($string1));
 $y = str_split (strtolower($string2));

sort($x);
sort($y);
$true = Array();

foreach ($x as $i => $v){
    if($v == $y[$i]){
        array_push($true, $y[$i]);
    }
}
if(count($true) == count($x)){
    echo "Anagrama correto";
}else{
    echo "Anagrama incorreto";
}
