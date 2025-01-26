<!-- You need to double the integer and return it. -->

<?php function 
doubleInteger($i)
{return $i*2;
  
}
?>


<?php
/*
Consider an array/list of sheep where some sheep may be missing from their place. We need a function that counts the number of sheep present in the array (true means present).

For example,*/
$test=
[true,  true,  true,  false,
  true,  true,  true,  true ,
  true,  false, true,  false,
  true,  false, false, true ,
  true,  true,  true,  true ,
  false, false, true,  true];
  


  function countSheep($arr){
    $count=0;
    foreach( $arr as $sheep){
        if($sheep)
        {$count=$count+1;}
    }
    return $count;
  }

  function countSheep2($arr){
    return count(array_filter($arr));
  }
  echo countSheep2($test);

?>