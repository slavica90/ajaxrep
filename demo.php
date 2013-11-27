<?php

/**
 * Define autoloader.
 * @param string $class_name
 */
function __autoload($class_name) {
  include 'class.' . $class_name . '.inc';
}

echo '<h2>Instantiating AddressResidence</h2>';
$address_residence = new AddressResidence;

echo '<h2>Setting properties...</h2>';
$address_residence->street_address_1 = '555 Fake Street';
$address_residence->city_name = 'Townsville';
$address_residence->subdivision_name = 'State';
$address_residence->country_name = 'United States of America';
echo $address_residence;
echo '<pre>';
var_dump($address_residence);
echo '<pre>';

echo '<h2>Testing Address __construct with an array</h2>';
$address_business = new AddressBusiness(array(
  'street_address_1' => '123 Phony Ave',
  'city_name' => 'Villageland',
  'subdivision_name' => 'Region',
  'country_name' => 'Canada',
));
echo $address_business;

echo '<h2>Instanciranje na AddressPark objekt</h2>';
$address_park = new AddressPark (array(
  'street_address_1' => '789 Missing Circle',
  'street_address_2' => 'Suite 0',
  'city_name' => 'Hamlet',
  'subdivision_name' => 'Territory',
  'country_name' => 'Australia',
   ));
echo $address_park;
echo '<pre>';
var_dump($address_park);
echo '<pre>';

echo '<h2> Testing typecasting</h2>';
$test_object = (object) array (
  'hello' => 'world',
  'nested' => array ('key' => 'value'),
  );
echo '<pre>';
var_dump($test_object);
echo '</pre>';