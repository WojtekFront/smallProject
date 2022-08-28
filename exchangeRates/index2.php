<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Always must be start<br>
    

    <table>
        <thead>
            <tr>
            <th>LP</th>
            <th>nazwa</th>
            <th>cena netto</th>
            <th>VAT</th>
            <th>cena brutto</th> 
            <th>ilość</th>   
            <th>razem</th>
            
            </tr>
        </thead>
        <tbody><tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            </tr>
        </tbody>
    </table>

    kurs Euro: 
    <?php
    $jsonV = file_get_contents('http://api.nbp.pl/api/exchangerates/rates/a/eur?format=json');
    $json = json_decode($jsonV);
    $value = $json->rates[0]->mid;
    echo($value)."<br>";

    ?>
</body>
</html>