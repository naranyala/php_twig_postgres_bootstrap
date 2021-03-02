<?php

declare(strict_types=1);

class Databases
{
   private $db_handler = '';

   public function __construct()
   {
      //code
   }

   public static function index()
   {
      try {
         $db_handler = new PDO("pgsql:host=127.0.0.1;dbname=hanndal_crm", "postgres", "naranyala");
         $db_handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         //$result = $db_handler->query("INSERT INTO users VALUES ('2','Rizal','rizalhzz','rizalhzz',1)");
         //echo $result->rowCount() . " berhasil ditambahkan ke tabel Users.";
         //die();
         $db_handler = null;
      } catch (PDOException $err) {
         die("Koneksi Gagal: " . $err->getMessage());
      }

      //var_dump($db_handler);
      //echo "you are in app/Databases.php";
   }

   public static function insert()
   {
      try {
         $db_handler = new PDO("pgsql:host=127.0.0.1;dbname=hanndal_crm", "postgres", "naranyala");
         $db_handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $result = $db_handler->query("INSERT INTO users VALUES ('4','Mifthakul Huda','huda','huda',1)");
         echo $result->rowCount() . " berhasil ditambahkan ke tabel Users.";
         //die();
         $db_handler = null;
      } catch (PDOException $err) {
         die("Koneksi Gagal: " . $err->getMessage());
      }
      //$result = $this->db_handler;
   }

   public static function show()
   {
      try {
         $db_handler = new PDO("pgsql:host=127.0.0.1;dbname=hanndal_crm", "postgres", "naranyala");
         $db_handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $result = $db_handler->query("SELECT * FROM users ORDER BY id_user ASC");

         $data = $result->fetchAll(PDO::FETCH_ASSOC);

         //var_dump($data);
         $db_handler = null;
         return $data;
      } catch (PDOException $err) {
         die("Koneksi Gagal: " . $err->getMessage());
      }
   }
}
