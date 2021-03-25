<?php
    echo "hello world"; //今天天气真不错啊~
    /*
     * 确实不错
     * 就是中午有点热
     * */
    #其实这个也是注释 shell
    //输出语句
    echo 'true';
    echo '<br>您的总分是：',60+60;
    echo '<br>您的性别是男的：','男';
    print '<br>你好'; //用法和echo相同，但是只能输出一个值

    //圆的求值
    //define()函数
    define('pai','3.14');
    define('R','5');
    echo '<br>圆周率=',pai;
    echo '半径=',R;
    //echo '半径=',r;
    echo '<br>面积=',pai*R*R;

    //const关键字
    const R = 6;
    const P = R*2;
    echo 'P=',P;

    //赋值$
    $a = 1;   //将1赋值给表达式
    echo $a;
    echo $a=1; //输出表达式的值
    $a = $a+4;
    echo $a;
    echo $a+4;
    $b = $a+1;
    echo $b;
    echo "<br>";
    echo $a,$b;
    echo "<br>";
    echo PHP_VERSION;
    echo PHP_OS;
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($a+$b);

    //数据类
    //boolean
    $flag1=true;
    $flag2=false;
    //整型
    $e = 012;  //八进制
    $t = 10;  //十进制
    $s = 0xa;  //十六进制
    echo $e,$t,$s;
    echo "<br>";
    //浮点型
    $fnum1 = 1.23;  //标准格式
    $fnum2 = -2.33; //标准格式
    $fnum3 = 3.14E6;  //科学计数
    $fnum4 = 2.33E-2;
    echo $fnum1,"<br>",$fnum2,"<br>",$fnum3,"<br>",$fnum4;
    //字符串
    $str = '今天天气真不错~';
    $str2 = 'abc123';
    $str3 = "今天";
    echo $str;
    echo '<br>我觉得',$str,'你觉得呢？';
    echo "<br>我觉得{$str}你觉得呢？";
    echo "<br>";
    var_dump($str);
    echo "<br>";
    var_dump($str2);
    echo "<br>";
    var_dump($str3);  //数据类型检测时，认为一个汉字为3，英文为1
