<?php

function test1()
{
    //     for ($i = 1; $i <= 10; $i++) {
    //         echo $i . "<br>";
    //     }

    $people = array(
        array('name' => 'Kalle', 'salt' => 856412),
        array('name' => 'Pierre', 'salt' => 215863)
    );
    print_r($people);
    for ($i = 0; $i < count($people); ++$i) {
        echo $i . "<br>";
        echo $people[$i]['salt'] = mt_rand(000000, 999999) . "<br>";
    }
    print_r($people);
    return;
}

test1();
