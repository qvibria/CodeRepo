<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$root/core/Bootstrap.php";
class BootstrapTest extends PHPUnit_Framework_TestCase{
    protected  $bootstrap;
    
    protected function setUp() {
       $this->bootstrap = new Bootstrap();
    }

    protected function tearDown() {
       $this->bootstrap = null;
    }

    
    public function testRoute(){
        $url = "http://localhost:8080/gogo";
        $this->assertEquals("/gogo", $this->bootstrap->route($url));
    }
    
   
}