<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <div id="calculator">

        <div id="result" colspan="5">
            <div data-previous-operand id="first-data">222</div>
            <div data-current-operand id="second-data">2222333</div>

        </div>

        <!-- keybord -->

        <button data-number>1</button>
        <button data-number>2</button>
        <button data-number>3</button>
        <button data-operation>+</button>
        <button data-operation>-</button>

        <button data-number>4</button>
        <button data-number>5</button>
        <button data-number>6</button>
        <button data-operation>*</button>
        <button data-operation>/</button>

        <button data-number>7</button>
        <button data-number>8</button>
        <button data-number>9</button>
        <button data-operation>%</button>
        <button data-operation>^</button>

        <button data-number>.</button>
        <button data-number>0</button>
        <button data-equals class="spanthree">=</button>
        <!-- close buttons  -->


        <!-- close calculator  -->
    </div>

</body>
<script src="js/button.js"></script>

</html>