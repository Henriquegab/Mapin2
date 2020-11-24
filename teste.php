<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory; 
$factory = (new Factory()) ->withDatabaseUri('https://mapin-a668e.firebaseio.com/');
$database = $factory->createDatabase();

$contatos = $database->getReference('usuarios')->getSnapshot();
print_r($contatos->getValue());

?>