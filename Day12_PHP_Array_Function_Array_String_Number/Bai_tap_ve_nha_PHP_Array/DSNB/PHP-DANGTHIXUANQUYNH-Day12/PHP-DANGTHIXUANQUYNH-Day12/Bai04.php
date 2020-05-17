<?php
$arrs = ["Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"];
echo "thủ đô của Italy " .$arrs['Italy']."<br>";

echo "thủ đô của ";
print_r(array_search('Rome', $arrs));
echo " là " . $arrs['Italy'];
echo "<br>";


foreach ($arrs as $x => $value){
    echo "thủ đô của ". $x .' là '. $value ."<br>";
}