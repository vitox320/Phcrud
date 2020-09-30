<?php

namespace crud\Model;

class User
{
    private $nome,$obrenome,$endereco,$bairro,$cidade,$estado;

    public function __get($atributo)
    {
        return $this->$atributo;
    }
    public function __set($atributo,$valor)
    {
        $this->$atributo = $valor;
    }

}