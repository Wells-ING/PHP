<?php
    // 形参：函数定义时使用的参数
    // 实参：函数调用是使用的参数
    // 形参是实参的载体

    // 函数的参数

    // 定义函数
    function add($arg1, $arg2) {    // 形参可以有多个，使用逗号分隔即可
        // 可以直接使用形参运算
        echo $arg1 + $arg2;
    }

    // 调用函数
    $num1 = 10;
    add($num1, 20);         // 传入的实参，可以是变量或者其他有值的表达式（变量、常量、运算符计算结果）

    // 1、系统调用add函数：去内存中寻找是否有add函数：有
    // 2、系统会在栈区开辟内存空间运行函数add
    // 3、系统会查找函数本身是否有形参：有，两个
    // 4、系统会判断调用的时候是否有实参：有，两个
    // 5、系统默认会将形参的值$num1，20取出顺序赋值给形参：$arg1和$arg2
    // 6、执行函数体：运行
    // 7、返回函数执行（返回值）

    // 注意：
    // 1、在PHP中，允许实参多于形参（个数）：函数内部不用而已
    // 2、在PHP中，理论上形参个数没有限制（实际开发不会太多）
    // 3、实参不能少于形参的个数

    // 报错
    // add($num1);

    // 默认值：default value，指的是形参的默认值，在函数定义中，就给形参进行一个初始赋值：
    //如果实际调用传入的参数（实参）没有提供，那么形参就会使用定义时的值来进入函数内部参与运算

    // 函数默认值
    function jian($num1 = 0, $num2 = 0) {
        // 当前的$num1是形参，在编译时不执行，即便执行也是在jian函数内部，不会与外部的$num1变量冲突
        echo $num1 - $num2;
    }

    // 调用：默认值如果存在，可以不用传入
    // jian($num1);
    // echo $num1;

    // 注意事项
    // 1、默认值的定义是放在最右边的（多个），不能左边形参有默认值，但是右边没有
    // 函数外部定义的变量名字与函数定义的形参名字冲突（同名）是没有任何关联关系的；如果多个函数使用同样的形参名字也不冲突

    // 值传递

    // 引用传值
    // function 函数名(形参1， &形参2) {
    //     // 函数体
    // }

    function display($a, &$b) {
        // 修改形参的值
        $a = $a * $a;
        $b = $b * $b;
        echo $a , '<br />' , $b , '<br />';
    }

    // 定义变量
    $a = 10;
    $b = 5;

    // 调用函数
    display($a, $b);

    echo '<br />' , $a , '<br />' , $b;

    // 引用传值注意事项：在传入实参的时候，比如传入变量

    // 错误调用：引入传值直接传入数据本身而不是变量
    // display(10, 5);


