<?php

require_once "NoweAuto.php";
require_once "AutoZDodatkami.php";
class Ubezpieczenie extends AutoZDodatkami {
    private $procentowaWartoscUbezpieczenia;
    private $liczbaLat;

    public function __construct($model, $cenaEuro, $alarm, $radio, $klimatyzacja, $procentowaWartoscUbezpieczenia, $liczbaLat) {
        parent::__construct($model, $cenaEuro, $alarm, $radio, $klimatyzacja);
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia;
        $this->liczbaLat = $liczbaLat;
    }

    public function getProcentowaWartoscUbezpieczenia() {
        return $this->procentowaWartoscUbezpieczenia;
    }

    public function getLiczbaLat() {
        return $this->liczbaLat;
    }

    public function setProcentowaWartoscUbezpieczenia($procentowaWartoscUbezpieczenia) {
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia;
    }

    public function setLiczbaLat($liczbaLat) {
        $this->liczbaLat = $liczbaLat;
    }

    public function ObliczCene() {
        $cenaZDodatkami = parent::ObliczCene();
        $zniżkaZaLata = (100 - $this->liczbaLat) / 100;
        $wartoscUbezpieczenia = $cenaZDodatkami * $this->procentowaWartoscUbezpieczenia / 100;
        return $cenaZDodatkami + $wartoscUbezpieczenia * $zniżkaZaLata;
    }

    public function __toString() {
        return "Model: {$this->getModel()}<br>Cena w Euro: {$this->getCenaEuro()}<br>Cena w PLN (bez dodatków): " . grandparent::ObliczCene() . "<br>Cena w PLN (z dodatkami): {$this->ObliczCene()}" . "<br> Cena z ubezpieczeniem w PLN: {$this->ObliczCene()}";
    }
}

 $autoZUbezpieczeniem = new Ubezpieczenie("Audi A4", 30000, 4.5, 500, 300, 1000, 5, 2);
 echo $autoZUbezpieczeniem;
