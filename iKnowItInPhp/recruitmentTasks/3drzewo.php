<?php
//już czas po świętach ale w domu mam nadal choinkę więc pora wrzucić ją do systemu
/*
 1      #
        #
2      ###
        #
3     #####
        #
4    #######
        #

*/

//pierwsza wersja
$z1 = 15;

choinka1($z1);

function choinka1($z1)
{
        $wolne = "&nbsp";
        $z1zastap = $z1;
        while ($z1zastap >= 0) {
                $z1zastap -= 1;
                $wolne .= "&nbsp&nbsp";
        }
        $wolne2 = $wolne;

        $drzewko = "x";
        for ($x = 1; $z1 >= $x; $x++) {

                echo $wolne2 . $drzewko . "<br>" . $wolne . "x<br>";
                $drzewko = $drzewko . "xx";
                $wolne2 = substr($wolne2, 10);
        }
}
