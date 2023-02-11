<?php 
    require_once('projectsElements/headingP.php')
?>

<?php
class PhoneKeyboardConverter
{
   
    private $convert = [
        "a" => "2", "b" => "22", "c" => "222",
        "d" => "3", "e" => "33", "f" => "333",
        "g" => "4", "h" => "44", "i" => "444",
        "j" => "5", "k" => "55", "l" => "555",
        "m" => "6", "n" => "66", "o" => "666",
        "p" => "7", "q" => "77", "r" => "777", "s" => "7777",
        "t" => "8", "u" => "88", "v" => "888",
        "w" => "9", "x" => "99", "y" => "999", "z" => "9999",
        " " => "0", "error" => "error"
    ];

    private $returnedValue = "";

    public function getValue($enteredValue) // takes the external data and starts the analysis
    {

        if (!isset($enteredValue) || !$enteredValue) { //check exist or not empty
            return "brak danych";
        } elseif (is_string($enteredValue)) {
            return $this->verificationFirstCharacter($enteredValue);
        }
        else { // "invalid value"
            return "niepoprawne dane";
        }
    }

    private function verificationFirstCharacter(string $enternedArray) // here we check the first character in the array
    {
        $firstCharacter = substr($enternedArray, 0, 1);
        return $this->assignToArray($firstCharacter, $enternedArray);
    }

    private function assignToArray(string $firstCharacterNew, string $enternedArray) // based on the first character assigns to an array
    {
        if (is_numeric($firstCharacterNew)) {
            $numericValue = $this->convertToString($enternedArray);
            return $numericValue;
        } elseif (preg_match("/[a-zA-Z\s]/", $firstCharacterNew)) {
            $stringValue = $this->convertToNumeric($enternedArray);
            return $stringValue;
        } else {
            return "niepoprawna wartość";
        }
    }

    private function convertToString(string $enternedArray) //change number on string
    {
        $convert = $this->convert;
        $returnedValue = $this->returnedValue;
        $enternedArray = explode(",", $enternedArray);
        for ($n = 0; count($enternedArray) > $n; $n++) {
            if (!is_numeric($enternedArray[$n])) {
                $enternedArray[$n] = "error";
            }
            foreach ($convert as $keyEnternedArrayWord => $enternedArrayWord) {
                if ($enternedArrayWord == $enternedArray[$n]) {
                    $returnedValue = $returnedValue . $keyEnternedArrayWord;
                }
            }
        }
        return $returnedValue;
    }

   private function convertToNumeric(string $enternedArray) //change string to number
    {
        $convert = $this->convert;
        $returnedValue = $this->returnedValue;
        $enternedArray = str_split(strtolower($enternedArray));
        for ($n = 0; (count($enternedArray)) > $n; $n++) {
            if ($returnedValue != "") {
                $returnedValue = $returnedValue . ",";
            }
            if (!preg_match("/[a-zA-Z\s]/", $enternedArray[$n])) {
                $enternedArray[$n] = "error";
            }
            $returnedValue = $returnedValue . $convert[$enternedArray[$n]];
        }
        return $returnedValue;
    }
}

$newSting = "Ela nie ma kotka ";
$newSting2 = "5,2,22,555,33,22,9999,66,44,55";

$test = new PhoneKeyboardConverter();
echo "Ela nie ma kotka = ".$test->getValue($newSting) . "<br>";
echo "5,2,22,555,33,22,9999,66,44,55 = ".$test->getValue($newSting2);
?>

<?php
    require_once('projectsElements/footerP.php');
?>
