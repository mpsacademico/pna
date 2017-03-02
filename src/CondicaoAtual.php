<?php
class CondicaoAtual {

    private $data;
    private $icone;
    private $descricao;
    private $texto;
    private $temperatura;
    private $umidade;
    private $direcaoVento;
    private $velocidadeVento;
    private $sensacaoTermica;
    private $pressao;
    
    function __construct($data, $icone, $descricao, $texto, $temperatura, $umidade, $direcaoVento, $velocidadeVento, $sensacaoTermica, $pressao) {
        $this->data = $data;
        $this->icone = $icone;
        $this->descricao = $descricao;
        $this->texto = $texto;
        $this->temperatura = $temperatura;
        $this->umidade = $umidade;
        $this->direcaoVento = $direcaoVento;
        $this->velocidadeVento = $velocidadeVento;
        $this->sensacaoTermica = $sensacaoTermica;
        $this->pressao = $pressao;
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

    public function getTemperatura() {
        return $this->temperatura;
    }

    public function setTemperatura($temperatura) {
        $this->temperatura = $temperatura;
    }

    public function getUmidade() {
        return $this->umidade;
    }

    public function setUmidade($umidade) {
        $this->umidade = $umidade;
    }

    public function getDirecaoVento() {
        return $this->direcaoVento;
    }

    public function setDirecaoVento($direcaoVento) {
        $this->direcaoVento = $direcaoVento;
    }

    public function getVelocidadeVento() {
        return $this->velocidadeVento;
    }

    public function setVelocidadeVento($velocidadeVento) {
        $this->velocidadeVento = $velocidadeVento;
    }

    public function getSensacaoTermica() {
        return $this->sensacaoTermica;
    }

    public function setSensacaoTermica($sensacaoTermica) {
        $this->sensacaoTermica = $sensacaoTermica;
    }

    public function getPressao() {
        return $this->pressao;
    }

    public function setPressao($pressao) {
        $this->pressao = $pressao;
    }

}
?>