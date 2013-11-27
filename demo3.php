<?php

require 'class.Address.inc';

echo '<h2>Instantiating Address</h2>';
$address = new Address;

$address->city_name = "Skopje";
$address->country_name="Makedonija";
$address->street_address_1 = "St. Obrad Cicmil 25";
$address->street_address_2 = "St. Vardarska 10";
$address->postal_code ="888888888888888888";
$address->address_type_id = 1;

echo '<h2>Empty Address</h2>';
echo '<tt> <pre>';
var_dump($address) ;
echo '</pre> </tt>';


echo '<h2>Display address</h2>';
echo '<pre>';
echo $address->display();
echo '</pre>';

echo '<h2>Testing protected access.</h2>';
echo $address->_address_id; 
echo '<br/>';


echo 'Testing magic __get and __set <br/>';
unset($address->postal_code); 
echo $address->display();

echo '<h2>Testiranje na __construct magic metodot</h2>';
$address_2 = new Address(array(
  'street_address_1' => 'Moja Ulica 1',
  'city_name' => 'Radovis',
  'subdivision_name' => 'Region',
  'postal_code' => '2420',
  'country_name' => 'Makedonija',
));
echo $address_2->display();

echo '<h2>Address __toString</h2>';
echo $address_2;

echo '<h2> Display Address types..</h2>';
echo '<tt> <pre>';
var_dump(Address::$valid_address_types) ;
echo '</pre> </tt>';