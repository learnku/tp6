<?php


namespace app\controller;


use app\BaseController;
use Illuminate\Support\Str;
use think\helper\Arr;

class DemoController extends BaseController
{
    public function index()
    {
        $str = Str::snake("hello word");
        $str = Str::camel($str);
        return $str;
    }

    public function test()
    {
        return 'demo - test';
    }
}