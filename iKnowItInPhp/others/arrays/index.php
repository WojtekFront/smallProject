<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            $bookLists= [['title'=>'My First Coding Book', 'type'=>'children book'], ['title'=>'Lullabies','type'=>'songs'], ['title'=>'Lullabies']];
            foreach($bookLists as $book){
                if(isset($book['title']) && isset($book['type']))
                {
        ?>
        <li>
            <?php 
                
                    echo $book['title']." - ".$book['type']; 
                }
            ?>
        </li>
        <?php }?>
    </ul>
</body>
</html>