<?php
require __DIR__ . '/vendor/autoload.php';
use \classes\Services\FileService;
use Symfony\Component\Dotenv\Dotenv;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use \Doctrine\DBAL\DriverManager;

$fs = new FileService();



$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');






// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer XML
// $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config"), $isDevMode);
// database configuration parameters
$paths = [];
$conn = array(
    'dbname' => $_ENV['DB_NAME'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'host' => $_ENV['DB_HOST'],
    'driver' => $_ENV['DB_DRIVER'],
);

$conn = DriverManager::getConnection($conn);
$db = $conn->createQueryBuilder();


