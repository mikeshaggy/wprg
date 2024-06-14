<?php
class NoweAuto {
    private $model;
    private $cenaEuro;
    private $kursEuroPLN;

    public function __construct($model, $cenaEuro) {
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
        $this->kursEuroPLN = $this->getEuroRate();
    }

    private function getEuroRate() {
        $apiUrl = "http://api.nbp.pl/api/exchangerates/rates/a/eur/";
        $response = @file_get_contents($apiUrl);

        if ($response === FALSE) {
            throw new Exception("Nie można pobrać kursu waluty z API NBP.");
        }

        $data = json_decode($response, true);

        if (isset($data['rates'][0]['mid'])) {
            return $data['rates'][0]['mid'];
        } else {
            throw new Exception("Nieprawidłowa odpowiedź z API NBP.");
        }
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getCenaEuro() {
        return $this->cenaEuro;
    }

    public function setCenaEuro($cenaEuro) {
        $this->cenaEuro = $cenaEuro;
    }

    public function getKursEuroPLN() {
        return $this->kursEuroPLN;
    }

    public function setKursEuroPLN($kursEuroPLN) {
        $this->kursEuroPLN = $kursEuroPLN;
    }

    public function ObliczCene() {
        return $this->cenaEuro * $this->kursEuroPLN;
    }

    public function __toString() {
        return "Model: {$this->model}<br>Cena w Euro: {$this->cenaEuro}<br>Cena w PLN: {$this->ObliczCene()}<br>";
    }
}

//$auto = new NoweAuto("BMW M3", 100000);
//echo $auto;