<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>! Work !</title>
</head>
<body>
    <h1> Here are few projects with the array. </h1>
    <ul>
        <?php
            $bookLists= [
                ['titleA'=>'Show biggest value from array', 'describeA'=>'select the greatest value from the array = [1, 10, 2, 3, 4, 5, 6, 7, 8, 9, 0]', 'fileA'=>'biggestValue'],
                ['titleA'=>'Recursion', 'describeA'=>'In this exercise I will take the value and add to it. I start from 1 and finish below 1000', 'fileA'=>'recursionValue'],
                ['titleA'=>'Test', 'describeA'=>'testing area', 'fileA'=>'sample'],
                ['titleA'=>'', 'describeA'=>'', 'fileA'=>''],
                ['titleA'=>'', 'describeA'=>'', 'fileA'=>'']
            ];
            foreach($bookLists as $book){
                if(!empty($book['titleA']) && !empty($book['describeA']) && !empty($book['fileA']))
                {
        ?>
        <li>
            <?php 
                    echo'<a href="projects/'.$book["fileA"].'.php">'.$book["titleA"].'</a> - '.$book["describeA"];
                }
            ?>
        </li>
        <?php }?>
    </ul>
</body>
</html>