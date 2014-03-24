<?php
/**
 * Created by ImpressPages
 */
namespace Plugin\HelloWorld;

class PublicController extends \Ip\Controller{

    public function sayHello()
    {
        return "Hello World. This is public controller example.";
    }

}