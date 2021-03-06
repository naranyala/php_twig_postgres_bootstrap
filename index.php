<?php

declare(strict_types=1);




require_once dirname(__DIR__) . '/vendor/autoload.php';
//require 'vendor/autoload.php';
require 'app/Databases.php';

class Bootstrap
{

   public static function url()
   {
      return sprintf(
         "%s://%s%s",
         isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
         $_SERVER['SERVER_NAME'],
         $_SERVER['REQUEST_URI']
      );
   }
}

$baseUrl = Bootstrap::url();
//echo $baseUrl;
//echo $url->url();
//var_dump($url);
//die();

//echo Databases::index();
//echo Databases::insert();
//var_dump(Databases::show());
$data = Databases::show();
//var_dump($data);
//var_dump($data[1]);

//* version 1
//$loader = new \Twig\Loader\ArrayLoader([
//   'index' => 'Hello {{ name }}!',
//   'welcome' => 'Welcome {{ name }}',
//]);
//$twig = new \Twig\Environment($loader);
//echo $twig->render('index', ['name' => 'Fudzer']);

//* version 2
$loader = new \Twig\Loader\FilesystemLoader('templates');
//$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader, [
   //'cache' => 'public/compilation_cache',
]);

//* from twig tutorial from Codecourse
$md5Filter = new \Twig\TwigFilter('md5', function ($string) {
   return md5($string);
});
$twig->addFilter($md5Filter);

//mengubah sintak default twig
$lexer = new \Twig\Lexer($twig, array(
   'tag_block' => array('{%', '%}'),
   'tag_variable' => array('{{', '}}'),
));

$twig->setLexer($lexer);

//* end from codecourse

echo $twig->render('welcome.php', [
   'name' => 'Naranyala',
   'age' => 22,
   'alamat' => 'Madiun',
   'project' => 'CRM',
   'type' => 'Hauler',
   'owner' => 'Weyland-Yutani',
   'reg-number' => '1234567',
   'baseUrl' => $baseUrl,

   'crew' => array(
      array(
         'name' => 'Ellen Ripley',
         'role' => 'Warrent Officer',
         'status' => 'Alive',
         'reg-number' => '01',
      ),
      array(
         'name' => 'Ash',
         'role' => 'Science Officer',
         'notes' => 'Possibly synthetic',
         'status' => 'Unknown',
         'reg-number' => '02',
      ),
      array(
         'name' => 'Parker',
         'role' => 'Chief Officer',
         'status' => 'Dead',
         'reg-number' => '03',
      ),
      array(
         'name' => 'Dallas',
         'role' => 'Captain',
         'status' => 'Unknown',
         'reg-number' => '04',
         'badges' => array(
            'gold', 'silver'
         ),
      ),
   ),

   'users' => array(
      array('name' => 'Max', 'age' => 18),
      array('name' => 'James', 'age' => 22),
      array('name' => 'Billy', 'age' => 34),
   ),
   'crm_users' => $data,
]);
