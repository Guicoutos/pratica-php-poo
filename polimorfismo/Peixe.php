<?php
class Peixe {
    private $corEscama;

    public function alimentar() {
        echo "<p>Comendo substâncias</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }

    public function locomover() {
        echo "<p>Nadando</p>";
    }

    function soltarBolha() {
        echo "<p>Soltou uma Bolha</p>";
    }

    function getCorEscama() {
        return $this -> corEscama;
    }

    function setCorEscama($corEscama) {
        $this -> corEscama = $corEscama;
    }
}
?>