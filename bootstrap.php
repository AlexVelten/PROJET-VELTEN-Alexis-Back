<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
//date_default_timezone_set('America/Lima');
require_once "vendor/autoload.php";
$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__ . "/config/yaml"), $isDevMode);
$conn = array(
'host' => 'ec2-34-254-24-116.eu-west-1.compute.amazonaws.com',
'driver' => 'pdo_pgsql',
'user' => 'tiyichqivsonkw',
'password' => 'f8bff4f52f19400ee3a584ef336fe954dd70d7ebc62181cc17c174912e428254',
'dbname' => 'd1f9kv7luqnj2f',
'port' => '5432'
);

$em = EntityManager::create($conn, $config);
