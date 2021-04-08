<?php
    // 系统函数

    // 输出相关
    // print() 类似于echo输出提供的内容，本质是一种结构（不是函数），返回1，可以不是用括号
    // print_r() 对变量进行操作，类似于var_dump，但是比var_dump简单，不会输出数据的类型，只会输出值（数组打印使用比较多）
    echo print ('Hello World<br />');
    print 'Hello World<br />';
    $a = 'Hello World<br />';
    var_dump($a); // 会输出变量的类型，格式为：变量类型（大小） 变量值
    print_r($a);

    echo '<hr />';

    // 时间相关
    // date() 按照指定格式对应的时间戳（从1970年格林威治时间开始计算的秒数）, 如果没有指定特定的时间戳，那么就是默认解释当前时间戳
    // Unix纪元（格林威治时间）：1970年1月1日0点0分0秒
    // 常用的格式：Y m d
    // time() 获取当前时间对应的时间戳
    // microtime() 微秒级别时间
    echo date('Y 年 m 月 d 日 H:i:s', 12345678), '<br />';
    echo time() , '<br />';
    echo microtime() , '<br />';

    // strtotime() 按照规定格式的字符串转换成时间戳
    echo strtotime('tomorrow 10 hours');