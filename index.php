<?php 

namespace myNameSpace;

require "bootstrap/autoload.php";

use bootstrap\Autoload;
use src\controller\HomeController;
use src\controller\TestController;

new Autoload();

$home = new TestController();

echo $home->index();