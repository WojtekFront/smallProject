<!-- nagłowek php -->



<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css">


  <title>pobieranie walut:</title>
</head>
<body>
  <H1>Pobierz kurs walut</H1>
<!-- ---------- form ---------- -->
  <form action="PHP/validationImport.php" method="post">
  <!-- ---------- exSelect - wybór waluty ---------- -->
    <div class="form-ex">
      <select name="exSelect" id="exSelect">
        <option value="brak">wybierz opcję</option>
        <option value="EUR">Euro</option>
        <option value="usd">Dolar Amerykański</option>
        <option value="GBP">Funt angielski</option>
      </select>
      <label for="exSelect">wybierz walutę:</label>
    </div>
  <!-- ---------- exDate - data dopobrania waluty ---------- -->
   <div class="form-ex">
      <input type="date" id="exDate" name="exDate"
       value="2023-06-18"
       min="2023-01-01">
       <label for="exDate">Podaj datę do pobrania waluty</label>
    </div>
  <!-- ---------- exAuthor - kto wysłał żądanie ---------- -->
    <div class="form-ex">
      <input id="exAuthor" name="exAuthor">
      <label for="exAuthor">kto wysłał żądanie</label>
    </div>
  <!-- ---------- exDecimal - liczba miejsc ---------- -->
   <div class="form-ex"> 
      <select name="exDecimal" id="exDecimal">
        <option value="0">0</option>  
        <option value="1">1</option>
        <option value="2" selected="selected">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <label for="exDecimal">ile miejs po przecinku pobrać </label>
    </div>
    <div class="form-ex">
      <input type="submit" value="wyślij">
    </div>
  </form>

  <!-- !!! komunikat czy się pobrało !!! -->

<!-- stopka -->
</body>
</html>