<?php

require_once "simple_html_dom.php";

$html = new simple_html_dom();

$html->load_file("https://myfin.by/crypto-rates");  

$element = $html->find('.odd');
?>
<table border="1">
    <thead>
        <tr>
            <th>Валюта</th>
            <th>Стоимость</th>
            <th>Капитализация</th>
            <th>Объем (24 ч.)</th>
            <th>Изменение (24 ч.)</th>
        </tr>
    </thead>
    <tbody>

<?php
for($i = 0; $i < 3; $i++){
    
    echo "<tr>";

    $carN = $element[$i]->find('.names');
    $carNm = $carN[0]->find('a');
    $carName = $carNm[0]->plaintext;
    echo "<td>".$carName."</td>";

    $carC = $element[$i]->find('td');
    $carCt = $carC[1]->plaintext;
    $firstSignDoll = strpos($carCt, "$");
    $carCost = substr($carCt, 0, $firstSignDoll+1);
    echo "<td>".$carCost."</td>";

    $carCap = $element[$i]->find('td');
    $carCapit = $carCap[2]->plaintext;
    echo "<td>".$carCapit."</td>";

    $carV = $element[$i]->find('td');
    $carVol = $carV[3]->plaintext;
    echo "<td>".$carVol."</td>";

    $carCh = $element[$i]->find('td');
    $carChn = $carCh[4]->plaintext;
    echo "<td>".$carChn."</td>";

    echo "</tr>";

    
}
$element = $html->find('.even');
for($i = 0; $i < 3; $i++){
    
    echo "<tr>";

    $carN = $element[$i]->find('.names');
    $carNm = $carN[0]->find('a');
    $carName = $carNm[0]->plaintext;
    echo "<td>".$carName."</td>";

    $carC = $element[$i]->find('td');
    $carCt = $carC[1]->plaintext;
    $firstSignDoll = strpos($carCt, "$");
    $carCost = substr($carCt, 0, $firstSignDoll+1);
    echo "<td>".$carCost."</td>";

    $carCap = $element[$i]->find('td');
    $carCapit = $carCap[2]->plaintext;
    echo "<td>".$carCapit."</td>";

    $carV = $element[$i]->find('td');
    $carVol = $carV[3]->plaintext;
    echo "<td>".$carVol."</td>";

    $carCh = $element[$i]->find('td');
    $carChn = $carCh[4]->plaintext;
    echo "<td>".$carChn."</td>";

    echo "</tr>";

    
}
?>

    </tbody>
</table>


