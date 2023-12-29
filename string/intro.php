<?php

// here all string declaration techniques


/* here example of heredoc string declaration
 heredoc start with <<<anyName then line break  and end with new line anyName  ;  anyName is equal to any valid identifier for heredoc

 anyName means marker


 
 heredoc support variable inside the string and it also preserver
 string format like html pre tag
 and it parse the escape sequence


 if we wanted to use double quote it also valid heredoc declaration

 example  <<<'name'  
              this is simple
              ashik;
*/ 

$sentence = <<<ashik
this is string with escape sequence \n \t supported
and preserve pre format like html pre tag 
ashik;

echo $sentence;


/*
nowdoc is like 'single quoted string'  with html pretag features

*/
$sentence = <<<'ashik'
this is string with escape sequence \n \t supported
and preserve pre format like html pre tag 
ashik;

echo $sentence;

 ?>
