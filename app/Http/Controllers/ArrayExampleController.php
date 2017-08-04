<?php

namespace App\Http\Controllers;

use App\ModelTest;
use Illuminate\Http\Request;

class ArrayExampleController extends Controller
{
    //
    public function index()
    {
        //目录界面
        return view('arrayview.index');
    }

    public function ex1()
    {
        //例子1
        $array = array(
            "foo" => "bar",
            "bar" => "foo",
        );

//        dd($array);

        var_dump($array);

        echo '<br>dd函数会停止程序，数组可以用[]';

        $array =[
            "foo" => "bars",
            "bar" => "foos",
        ];

        dd($array);
    }

    public function ex2()
    {
        $array = [
            1 => "a",
            "1" =>"b",
            1.5 => "c",
            true => "d",
        ];
        
        var_dump($array);

        echo '总体来说，最后一次成功赋值，会掩盖之前的赋值';
    }

    public function ex3()
    {
        $array = [
            "foo" => "bar",
            "bar" => "foo",
            100 => -100,
            -100 => 100,
        ];

        var_dump($array);

        echo '说明key可以将int和string混用,数组的下个元素不一定和上个相同';
    }

    public function ex4()
    {
        $array = [
            "foo",
            "bar",
            "name",
            "hello",
        ];

        var_dump($array);
        
        echo '<br> 默认就是0123';
    }

    public function ex5()
    {
        $array = [
            "a",
            "b",
            "name" => "c",
            "d",
        ];
        var_dump($array);

        echo 'd会查找上面最后一个能使用的数字,然后接着这个数字走';
    }

    public function ex6()
    {
        $array = [
            "name" => "mlegin",
            54 => 1.45,
            "school" => [
                "highschool" => "123",
                "colleage" => "456",
            ]
        ];

        var_dump($array);

        echo '<br> 数组里面，什么类型都可以写的';
//        dd($array);
    }

    public function getArray()
    {
        return array(1,2,3);
    }

    public function ex7()
    {
        $secondElemnt = $this->getArray()[1];

        $tmp = $this->getArray();

        var_dump($tmp);

        var_dump($secondElemnt);

        $secondElemnt = $tmp[1];

        var_dump($secondElemnt);

        list(,$secondElemnt) = $this->getArray();
    }

    public function ex8()
    {
        $array = array(5 => 1, 12 =>2);

        $array[] = 56;

        $array["x"] = 42;

        var_dump($array);

        unset($array[5]);

        var_dump($array);

        unset($array);

//        var_dump($array); //这里会undefine
    }

    public function ex9()
    {
        $array = array("q","w","e","r","t");
        print_r($array);

        foreach ($array as $i => $item) {
            unset($array[$i]);
            echo $i;
            echo $item.'<br>';
        }

        echo  '<br> foreach 有两种写法，（$array as $value）是值，($array as $key => $value) 是key';
        echo  '重建索引 array_values()';
        echo  '如果不用foreach，怎么获得数组长度';
        $array[] = 6;
        print_r($array);
    }

    public function ex10()
    {
        //数组转换
        //
        $demo = (array) new ModelTest();
        var_dump((array) new ModelTest());

//        dd($demo);

        echo '<br>这个是用对象转换为数组，感觉不能这么用';
    }

    public function ex11()
    {
        $colors = [
            "red",
            "white",
            "blue",
            "green",
        ];

        foreach ($colors as $color) {
            $color = strtoupper($color);
        }

        var_dump($colors);

        foreach ($colors as $i => $color) {
            $colors[$i] = strtoupper($color);
        }

        var_dump($colors);
    }

    public function ex12()
    {
        $fruits = [
            "fruits" => [
                "apple",
                "bannana",
                "orange",
            ],
            "numbers" => [
              1,
              2,
              3,
              4,
                5,
                6
            ],
            "holes" => [
                "first",
                5 => "second",
                "third"
            ],
        ];

        echo $fruits["holes"][5];
        echo $fruits["fruits"][0];
        echo $fruits["numbers"][4];

        $juies["apple"]["green"] = "good";

        var_dump($juies);

        echo '<br> 可以直接赋值二维数组哦';
    }

    public function ex13()
    {
        echo '<br>关于引用的拷贝';

        $arr1 = array("ar","bg");

        $arr2 = $arr1;

//        $arr1[] =4;

        $arr3 = &$arr1;

        $arr1[] =4;

        var_dump($arr2);

        var_dump($arr3);

        echo "所以，引用是共用，直接赋值就是赋予";
    }
}
