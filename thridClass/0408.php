<?php
    // 系统自带函数
    $str = "Hello World";
    // 系统自带函数：字符串转大写：strtouppper() 字符串转小写：strtolower()
    $upper = strtoupper($str);
    $lower = strtolower($str);
    echo $upper;
    echo '<br />';
    echo $lower;

    // 自带函数
    function createTable($rows, $cols) {
        $html = '<table border="1">';
        for($i = 1; $i <= $rows; $i++) {
            $html .= '<tr>';
            for($j = 1; $j <= $cols; $j++) {
                $html .= '<td>今天天气不错哈</td>';
            }
            $html .= '</tr>';
        }
        return $html . '</table>';
    }

    echo createTable(5, 10);

    // 不带参数
    function say() {
        return 'Hello World';
    }

    // 带参数
    function say2($username) {
        return 'Hello , ' . $username;
    }

    echo say();
    echo '<br />';
    echo say2("Wells");
    echo '<br />';
    // 强制类型转换
    echo say2(1234);

    function add($a, $b) {
        $a = $a + $b;
        return $a;
    }
    echo '<br />';
    echo add(5, 7);

    $x = 5;
    $y = 7;
    echo '<br />';
    echo add($x, $y);

    function show(&$str) {
        $str .= "天气真不错啊";
    }

    $var = "今天";
    show($var);
    echo '<br />';
    echo $var;
    show($var);
    echo '<br />';
    echo $var;

    // 设置参数默认值
    function sayHello($name, $say = ' say "Hello"') {
        return $name . $say;
    }

    echo '<br />';
    echo sayHello("Wells");
    echo '<br />';
    echo sayHello("Wells", ' say "I do not know"');

    // 指定参数的类型
    function sum(int $a, int $b) {
        return $a + $b;
    }

    echo '<br />';
    echo sum(5, 8);
    echo '<br />';
    echo sum(5.5, 8.6);

    // 作用域
    function test() {
        $sum = 36;
        return $sum;
    }
    $sum = 0;
    echo '<br />';
    echo test();   // 36
    echo '&nbsp;';
    echo $sum;     // 0
    echo '<br />';
    echo test() . $sum;

    // 默认情况下，函数不能使用全局变量，函数内的局部变量的变化不会对全局变量有任何影响

    // 字符串函数
    // 截取字符串
    $url = '/Users/wells/sites/thridClass/0408.php';
    $pos = strrpos($url, '/');    // 转义
    // 第三个参数可选，表示需要截取的长度
    // 1. 省略第三个参数 截取位置后所有字符串
    // 2. 第三个参数为正数时，返回字符串从指定位置开始的若干字符
    // 3. 第三个参数为负数时，返回字符串从结尾处被省略
    // 4. 第三个参数为0，false，null，返回空字符串
    echo '<br />';
    echo substr($url, $pos + 1);
    echo '<br />';
    echo substr($url, 0, $pos);

    // 替换
    $tel = '15751366023';
    $len = 4;
    $replace = str_repeat("*", $len);    // 将指定字符重复相应次数
    echo '<br />';
    echo substr_replace($tel, $replace, 3, $len);

    // 过滤字符串首尾的空白字符
    $str = ' how are you ? what are you doing ?  ';
    echo '<br />';
    echo '使用前：' , $str , "中文";
    echo '<br />';
    echo '使用后：' , trim($str) , "中文";

    // 字符串比较
    echo '<br />';
    if(strcmp("zhangsan", "zhangshan")) {
        echo '两个词不一样';
    } else {
        echo '两个词一样';
    }

    echo '<br />';
    echo strcmp("zhangsan", "zhangshan");

    // 长度
    $str = '学习PHP真是好开心啊~';
    echo '<br />';
    echo strlen($str);
    echo '<br />';
    echo mb_strlen($str, "UTF-8");

    // 数学函数
    echo '<br />';
    echo ceil(5.2);  // 向上取整
    echo '<br />';
    echo floor(5.2);  // 向下取整
    echo '<br />';
    echo rand(1, 20);  // 1~20之间的整数

    // 时间函数
    echo '<br />';
    echo time();

    // 格式化的时间戳
    echo '<br />';
    echo date('Y-m-d H:i:s');
    echo '<br />';
    echo date('Y-m-d H:i:s', time());
    // Y表示4位年份，例如：2020
    // y表示2位年份，例如：20
    // M表示月份，用三个英文字母表示，例如：Apr
    // m表示月份，用数字表示，例如：04
    // D表示3个英文字母星期，例如：Sun
    // d表示月份的第几天
    // H表示24小时制
    // h表示12小时制



    // 练习
    // 1. 根据身份证号码显示生日及性别
    $idCard = "32082620001005241X";
    echo '<br />';
    $brith = substr($idCard, 10, 4);
    echo '您的生日为' , substr($brith, 0, 2) , '月' , substr($brith, 3, 4) , '日';
    $sex = substr($idCard, 16, 1);
    echo '<br />';
    if($sex % 2 == 1) {
        echo '您是男性';
    } else {
        echo '您是女性';
    }
    // 2. 根据两个变量，创建判断变量是否相同的函数
    $str1 = "Wells";
    $str2 = "wells";
    function isStrSame($str1, $str2) {
        if(strcmp($str1, $str2)) {
            return '两个变量值不同';
        } else {
            return '两个变量值相同';
        }
    }
    echo '<br />';
    echo isStrSame($str1, $str2);
    // 3. 根据三个变量，创建加、减、乘、除计算
    function arithmeticOperation($num1, $num2, $operator) {
        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                return $num1 / $num2;
            default:
                break;
        }
    }
    $num1 = 1;
    $num2 = 2;
    $operator = '/';
    echo '<br />';
    echo $num1 , $operator ,$num2 , '=' , arithmeticOperation($num1, $num2, $operator);
    // 4. 根据两个变量，创建替换字符的函数
    // 要求如下：
    //  1. 变量一为目标字符串，长度必须大于3位
    //  2. 变量二为需要替换成哪个字符
    // 首尾字符为变量一的首尾字符，其余字符为变量二
    function replaceStr($str1, $str2) {
        $len = strlen($str1) - 2;
        $replace = str_repeat($str2, $len);
        return substr_replace($str1, $replace, 1, $len);
    }
    $str1 = "000000000";
    $str2 = "2";
    echo '<br />';
    echo replaceStr($str1, $str2);

