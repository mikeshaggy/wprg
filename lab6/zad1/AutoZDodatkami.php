<?php

require_once "NoweAuto.php";

class AutoZDodatkami extends NoweAuto {
    private $alarm;
    private $radio;
    private $klimatyzacja;

    public function __construct($model, $cenaEuro, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model, $cenaEuro);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    public function getAlarm() {
        return $this->alarm;
    }

    public function setAlarm($alarm) {
        $this->alarm = $alarm;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function getKlimatyzacja() {
        return $this->klimatyzacja;
    }

    public function setKlimatyzacja($klimatyzacja) {
        $this->klimatyzacja = $klimatyzacja;
    }

    public function ObliczCene() {
        $basicPrice = parent::ObliczCene();
        $extrasPrice = ($this->alarm + $this->radio + $this->klimatyzacja) * $this->getKursEuroPLN();
        return $basicPrice + $extrasPrice;
    }

    public function __toString() {
        return "Model: {$this->getModel()}<br>Cena w Euro: {$this->getCenaEuro()}<br>Cena w PLN (bez dodatków): " . parent::ObliczCene() . "<br>Cena w PLN (z dodatkami): {$this->ObliczCene()}";
    }


}

//$auto = new AutoZDodatkami("BMW M3", 30000, 200, 300, 1000);
//echo $auto;