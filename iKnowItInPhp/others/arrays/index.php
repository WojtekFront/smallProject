<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>! Work !</title>
</head>
<body>
    <ul>
        <?php
            $bookLists= [
                ['titleA'=>'Show biggest value from array', 'describeA'=>'select the greatest value from table=[1,10,2,3,4,5,6,7,8,9,0]', 'fileA'=>'biggestValue'],
                
                ['titleA'=>'', 'describeA'=>'', 'fileA'=>''],
            ];
            foreach($bookLists as $book){
                if(!empty($book['titleA']) && !empty($book['describeA']) && !empty($book['fileA']))
                {
        ?>
        <li>
            <?php 
                    echo'<a href="projects/'.$book["fileA"].'.php">'.$book["titleA"].'</a>';
                }
            ?>
        </li>
        <?php }?>
    </ul>
</body>
</html>