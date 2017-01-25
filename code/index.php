<?php

/* Connect to a MySQL database */

class DB {
  protected static $conn;

  public function Connect() {
    $dsn = 'mysql:dbname=db_test;host=db';
    $user = 'admin';
    $password = 'admin';

    if((self::$conn instanceof PDO) === false) {
      self::$conn = new PDO($dsn, $user, $password);
      echo "Database connected";
    }

    return self::$conn;
  }
}

$db = DB::Connect();

echo phpinfo();