<?php

/*
1.
Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. 
Tiems masyvo nariams, kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), 
priskirkite reikšmę “A”. Likusiems nariams priskirkite reikšmę “B”.
 Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();
*/
echo '1.<br>';
$array = [];
foreach(range(0, 100) as $i) {
    if ($i % 10 === 0) {
        $array[] = 'A';
    } else {
        $array[] = 'B';
    }
}
echo '<pre>';
print_r($array);

echo '<br><br><br>';

/*
2.
Pakeiskite pirmąjame uždavinyje sukurtą masyvą.
Visas masyvo reikšmes (“A” ir “B”) pakeiskite masyvais,
kurie yra atsitiktinio dydžio (ilgio) nuo 3 iki 10.
Naujai sukurtų masyvų reikšmes užpildykite atitinkamai “A” arba “B” stringais (pagal tai kokią raidę keičiate į masyvą).
Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();
*/
echo '2.<br>';
foreach ($array as &$element) {
    $value = '';
    if ($element === 'A') {
        $value = 'A';
    } else {
        $value = 'B';
    }

    $element = [];
    foreach(range(1, rand(3, 10)) as $_) {
        $element[] = $value;
    }
}
unset($element);
print_r($array);

echo '<br><br><br>';

/*
3.
Pakeiskite antrame uždavinyje sukurtą masyvą.
Visus antro lygio masyvus pailginkite iki 10 elementų.
Papildomai sukurtų elementų reikšmes užpildykite “C” stringais.
Jeigu masyvo ilgis jau yra 10, tai tokio masyvo keisti nereikia.
Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r().
Papildomai: Suskaičiuokite kiek gautame masyve yra “A”, “B” ir “C” reikšmių ir rezultatą atspausdinkite.
*/
echo '3.<br>';

foreach ($array as &$element) {
        while (count($element) < 10) {
            $element[] = 'C';
        }
}
unset($element);
print_r($array);
echo '<br><br><br>';

echo '3*.<br>';

$aCount = 0;
$bCount = 0;
$cCount = 0;

foreach ($array as $element) {
    foreach ($element as $letter) {
        $check = match ($letter) {
            'A' => $aCount++,
            'B' => $bCount++,
            'C' => $cCount++,
        };
    }
}

echo "A raidziu: $aCount; B raidziu: $bCount; C raidziu : $cCount;";