<?php

include_once 'conexion.php';

class Survey extends DB
{
    private $totalVotes;
    private $optionSelected;
    
    public function setOptionSelected($option)
    {
        $this->optionSelected = $option;
    }
    public function getOptionSelected()
    {
        return $this->optionSelected;
    }

    public function vote()
    {
        $consulta = $this->Conectar()->prepare('UPDATE lenguajes SET votos = votos +1 WHERE opcion = :opcion');
        $consulta->execute(['opcion' => $this->optionSelected]);
    }

    public function showResults()
    {
        return $this->Conectar()->query('SELECT * FROM lenguajes');
    }

    public function getTotalVotes()
    {
        $consulta = $this->Conectar()->query('SELECT SUM(votos) AS votos_totales FROM lenguajes');

        $this->totalVotes = $consulta->fetch(PDO::FETCH_OBJ)->votos_totales;
        return $this->totalVotes;
    }

    public function getPercentageVotes($votes)
    {
        return round(($votes / $this->totalVotes) *100 , 0);
    }

}

?>