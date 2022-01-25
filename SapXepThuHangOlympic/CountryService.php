<?php
include_once "Country.php";

class CountryService
{
    public $countrys;

    public function getAll()
    {
        return $this->countrys;
    }

    public function add($country)
    {
        $this->countrys[] = $country;
    }

    public function sort()
    {
        for ($i = 0; $i < count($this->countrys); $i++) {
            $max = $this->countrys[$i];
            $index = $i;
            for ($j = $i + 1; $j < count($this->countrys); $j++) {
                if ($max->totalGoldMedals < $this->countrys[$j]->totalGoldMedals) {
                    $max = $this->countrys[$j];
                    $index = $j;
                }
            }
            $temp = $this->countrys[$i];
            $this->countrys[$i] = $max;
            $this->countrys[$index] = $temp;
        }
        return $this->countrys;
    }
}