<?php
require_once $_SERVER['DOCUMENT_ROOT']."/computadoras/lib/php-activerecord/ActiveRecord.php";

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory('/path/to/your/model_directory');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:@localhost/software_seminario_b',
       'test' => 'mysql://root:@localhost/software_seminario_b',
       'production' => 'mysql://root:@localhost/software_seminario_b'
     )
   );
});