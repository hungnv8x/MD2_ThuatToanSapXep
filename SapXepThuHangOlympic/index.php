<?php
include_once "CountryService.php";
include_once "Country.php";
$country = new Country("Viet Nam",100);
$country1 = new Country("Thai Lan",90);
$country2 = new Country("Indo",80);
$country3 = new Country("Malaysia",70);
$countryService = new CountryService();
$countryService->add($country3);
$countryService->add($country1);
$countryService->add($country2);
$countryService->add($country);
$countryService ->sort();
echo "<pre>";
print_r($countryService->getAll());
