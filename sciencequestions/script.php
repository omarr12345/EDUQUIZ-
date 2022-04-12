<?php

$data = json_decode(stripslashes($_POST['data']));
$xml = simplexml_load_file("file.xml") or die("Error: Cannot create object");
$score = 0;
$increment = 100 / count($data);
for ($i=0; $i < count($data); $i++)       
   { 
        if ($xml->question[$i]->correct == $data[$i]){
                $score += $increment;
        }
   }
echo $score;
?>