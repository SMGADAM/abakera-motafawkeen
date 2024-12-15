<?php
    $qc = $_GET['qc'];
    $conn =  mysqli_connect('localhost','root' , '' , 'abakera');
    $q = mysqli_query($conn , "SELECT * FROM table3 WHERE used != 1 AND c LIKE '%$qc%' ORDER BY RAND() LIMIT 1 ");





    // print_r($q);

    foreach($q as $r){
        $question = $r['q'];
        $answer = $r['a'];  
        // echo $question;
    }


    $data = [
        "q"=> $question,
        "a"=> $answer
    ];


    echo json_encode($data);
    
    mysqli_query($conn , "UPDATE table3 set used = 1 where q = '$question' ");

    // echo $q;
?>