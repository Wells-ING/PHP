<?php
    // 函数体
    // 基本上所有代码都可以实现
    // 1. 定义常量
    // 2. 定义变量
    // 3. 使用流程控制（分支、循环）
    // 4. 可以调用函数

    // 返回值
    // 在PHP中所有的函数都有返回值，如果没有明确return使用，那么返回NULL

    // 定义函数
    function display() {
        // 输出
        echo __FUNCTION__ , "<br />";  // 输出当前函数名字
    }

    display();

    // 运行函数，并输出返回值
    var_dump(display());

    echo '<br />';

    // 加法运算
    function add($num1, $num2) {
        return $num1 + $num2;   // 返回结果
        // 注意：return关键字后的代码不执行
        echo $num1;
    }

    $res = add(10, 20);  // 外部定义变量接受函数运行结果

    // 将结果提交给另外包含的文件
    return 'Hello World';

    echo $res , '<br />';

    // return可以在文件中直接使用（不在函数里面）：代表文件将结果return后面跟着的内容，转交给包含当前文件的位置。（通常在系统配置文件中使用较多）





