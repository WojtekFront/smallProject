<?php

//1. readfile()
//echo readfile("helloWorld.txt"); //drukuje tekst z notatnika, bez zachowania linii 

//2. fopen("file","r"); - read text
// $myFile = fopen("helloWorld.txt", "r") or die("plik nieodnaleziony");
// echo fread($myFile, filesize("helloWorld.txt"));
// fclose($myFile);

//3. fgets(); - read one line
// $myFile = fopen("helloWorld.txt", "r") or die("plik nieodnaleziony");
// echo fgets($myFile);
// fclose($myFile);

//4. feof(); check end of file
$myFile = fopen("helloWorld.txt", "r") or die("plik nieodnaleziony");
while (!feof($myFile)) {
    echo fgets($myFile) . "<br>";
}
fclose($myFile);
