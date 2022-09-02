<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

class Vegetable {
    public $edible;
    public $color;
    public function __constructor($edible, $color="green"){
        $this->edible = $edible;
        $this->color = $color;
    }

public function isEdible(){
return $this->edible;
}
public function getColor(){
    return $this->color;
}

}


?>
</body>
</html>