<?php
class db
{
  const HOST = "db";
  const DBNAME = "miBBDD";
  const USER = "manager";
  const PASSWORD = "secret"; // Evidentemente adapta los valores

  static public function conexion()
  {
    $conexion = null;
    try {
      $opciones =  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
      $conexion = new PDO('mysql:host=localhost;  dbname=' .self::DBNAME,self::USER,self::PASSWORD, $opciones);
    } catch (Exception $e) {
       echo "Ocurrió algo con la base de datos: " . $e->getMessage();
      }
     return $conexion; //Es un objeto de conexion PDO
    }
}
