<?php
/**
 * Created by ImpressPages
 */
namespace Plugin\HelloWorld;

class AdminController extends \Ip\Controller{

    public function index(){
        // Index action adds an item to administration menu
        return 'Hello World plugin'; // HTML string returned by this method appears in administration menu.
    }

    public function sayHello()
    {
        return "Hello World. This is admin controller example.";
    }

}