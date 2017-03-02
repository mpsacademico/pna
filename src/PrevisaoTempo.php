<?php
abstract class PrevisaoTempo {

    private $diaSemana;
    private $data;
    private $icone;
    private $descricao;
    private $texto;
    private $minima;
    private $maxima;
    private $probChuva;
    private $nascerSol;
    private $porSol;

    function __construct($diaSemana, $data, $icone, $descricao, $texto, $minima, $maxima, $probChuva, $nascerSol, $porSol) {
        $this->diaSemana = $diaSemana;
        $this->data = $data;
        $this->icone = $icone;
        $this->descricao = $descricao;
        $this->texto = $texto;
        $this->minima = $minima;
        $this->maxima = $maxima;
        $this->probChuva = $probChuva;
        $this->nascerSol = $nascerSol;
        $this->porSol = $porSol;
    }

    public function getDiaSemana() {
        return $this->diaSemana;
    }

    public function setDiaSemana($diaSemana) {
        $this->diaSemana = $diaSemana;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getIcone() {
        return $this->icone;
    }

    public function setIcone($icone) {
        $this->icone = $icone;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function getMinima() {
        return $this->minima;
    }

    public function setMinima($minima) {
        $this->minima = $minima;
    }

    public function getMaxima() {
        return $this->maxima;
    }

    public function setMaxima($maxima) {
        $this->maxima = $maxima;
    }

    public function getProbChuva() {
        return $this->probChuva;
    }

    public function setProbChuva($probChuva) {
        $this->probChuva = $probChuva;
    }

    public function getNascerSol() {
        return $this->nascerSol;
    }

    public function setNascerSol($nascerSol) {
        $this->nascerSol = $nascerSol;
    }

    public function getPorSol() {
        return $this->porSol;
    }

    public function setPorSol($porSol) {
        $this->porSol = $porSol;
    }

}
?>
