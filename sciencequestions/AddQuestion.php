<?php
if (isset($_POST['save'])){
    $xml = new DOMDocument();
    if (file_exists('file.xml')){
        $xml->load('file.xml');
    }
   

    $xml->formatOutput = true;
    

    // mn awl hna l7d t7t, da kda ht3mlo m3 kol so2al 
    // code sabt elly hyt8r bs goz2 elly feh $_POST
    $xml_question = $xml->createElement("question");
    $xml_title = $xml->createElement("title");
    $xml_ans1 = $xml->createElement("answer1");
    $xml_ans2 = $xml->createElement("answer2");
    $xml_ans3 = $xml->createElement("answer3");
    $xml_ans4 = $xml->createElement("answer4");
    $xml_correct = $xml->createElement("correct");

    // create id
    $id = $xml->createAttribute('id');
    $id->value = uniqid();

    // klam nfso ely gaylk mn add.html
    // da goz2 elly hyt8yr kol so2al
    $title = $xml->createTextNode($_POST['title']);
    $ans1 = $xml->createTextNode($_POST['answer1']);
    $ans2 = $xml->createTextNode($_POST['answer2']);
    $ans3 = $xml->createTextNode($_POST['answer3']);
    $ans4 = $xml->createTextNode($_POST['answer4']);
    $correct = $xml->createTextNode($_POST['correct']);

    // add klam l kol tag
    $xml_title->appendChild($title);
    $xml_ans1->appendChild($ans1);
    $xml_ans2->appendChild($ans2);
    $xml_ans3->appendChild($ans3);
    $xml_ans4->appendChild($ans4);
    $xml_correct->appendChild($correct);

    // add tags l <question>
    $xml_question->appendChild($id);
    $xml_question->appendChild( $xml_title );
    $xml_question->appendChild( $xml_ans1 );
    $xml_question->appendChild( $xml_ans2 );
    $xml_question->appendChild( $xml_ans3 );
    $xml_question->appendChild( $xml_ans4 );
    $xml_question->appendChild( $xml_correct );

    // add <question> l file nfso
    $xml->appendChild( $xml_question );

    // save file
    umask();
    $xml->save("file.xml");
}



?>