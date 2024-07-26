<?php
namespace Config;

class Db
{
  public static function conexao()
  {
    $conexao = new \PDO("mysql:host=localhost;dbname=phpoo","root","");
    
    return $conexao;
  }
}
