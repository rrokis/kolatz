<?php

$sk = isset($_REQUEST["sk"]) ? $_REQUEST["sk"] : 0;

if (is_numeric($sk) && $sk > 0) {
    $ciklai = 0;
    print("Įvesta reikšmė: " . $sk . "<br>");
    print("Sekos reikšmės: <br>");

    while ($sk != 1) {
        if ($sk % 2 == 0) {
            $sk = $sk / 2;
        } else {
            $sk = 3 * $sk + 1;
        }
        print($sk . "<br>");
        $ciklai++;
    }

    print("Ciklų kiekis: " . $ciklai);
} else {
    print("Įveskite reikšmę");
}

?>
