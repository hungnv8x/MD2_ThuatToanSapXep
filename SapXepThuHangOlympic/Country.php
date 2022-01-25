<?php

class Country
{
    public $name;
    public $totalGoldMedals;

    /**
     * @param $name
     * @param $totalGoldMedals
     */
    public function __construct($name, $totalGoldMedals)
    {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTotalGoldMedals()
    {
        return $this->totalGoldMedals;
    }

    /**
     * @param mixed $totalGoldMedals
     */
    public function setTotalGoldMedals($totalGoldMedals): void
    {
        $this->totalGoldMedals = $totalGoldMedals;
    }

}