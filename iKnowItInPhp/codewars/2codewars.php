<!-- To be a senior, a member must be at least 55 years old and have a handicap greater than 7. In this croquet club, handicaps range from -2 to +26; the better the player the lower the handicap. -->
<?php
$input =  [[18, 20], [45, 2], [61, 12], [37, 6], [21, 21], [78, 9]];
//  output = ["Open", "Open", "Senior", "Open", "Open", "Senior"]


function readClient($input){
    $output=[];
foreach($input as $input1)
    if($input1[0]>=55 && $input1[1]>7){
  
        array_push($output,"Senior");
    }
    else{
        array_push($output,"Open");
    }

return $output;
}

print_r(readClient($input))

?>