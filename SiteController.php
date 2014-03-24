<?php
/**
 * Created by ImpressPages
 */
namespace Plugin\HelloWorld;

class SiteController extends \Ip\Controller{

    public function sayHello()
    {
        return "Hello World. This is site controller example.";
    }

}