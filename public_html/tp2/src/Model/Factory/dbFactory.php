<?php

namespace Rediite\Model\Factory;

class dbFactory {

  function createService() {
    return new \PDO('mysql:dbname=tpphp;host=127.0.0.1;port=3307"', 'root', 'root');
  }
}
