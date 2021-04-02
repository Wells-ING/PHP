<?php
    // 数据类型检测
    var_dump(is_bool("1"));
    var_dump(is_string("Hello"));
    var_dump(is_int(25.5));

    // 运算符
    // 赋值运算符
    $a = $b = $c = 1;  // 同时为三个变量赋值
    $i = 5;
    $str = "Hello";
    $i += 1;  // 等价于 $i = $i + 1
    $i++;  // 自增
    // .= 运算符
    $str .= " World";  // 等价于 $str = $str.' World'
    echo $str;

    echo "<br />";
    // 错误控制运算符
    echo @(4 / 0);

    // 算术运算符的优先级
    echo 4 + 3 * 2;  // 10
    echo (4 + 3) * 2;  // 14

    // 流程控制

    // 选择
    $age = 20;

    if($age >= 18) {
        echo "已成年";
    }

    if($age >= 18) {
        echo "已成年";
    } else {
        echo "未成年";
    }

    // 三元运算符
    // 表达式 ? 满足条件 : 未满足条件
    echo $age >= 18 ? "已成年" : "未成年";

    // if...elseif...else语句
    $score = 60;
    if ($score >= 90) {
        echo "优秀";
    } elseif ($score >= 80) {
        echo "良好";
    } elseif ($score >= 70) {
        echo "中等";
    } elseif ($score >= 60) {
        echo "及格";
    } else {
        echo "不及格";
    }

    // switch
    switch((int)($score / 10)) {
        case 10:
        case 9:
            echo "优秀";
            break;
        case 8:
            echo "良好";
            break;
        case 7:
            echo "中等";
            break;
        case 6:
            echo "及格";
            break;
        default:
            echo "不及格";
    }

    // 循环

    echo "<br />";
    // while
    $i = $sum = 0;  // 初始值
    while($i < 5) {
        echo ' $i=' , $i;
        $sum += $i;
        $i++;
    }
    echo '<br/>$sum=' . $sum;

    // do...while
    $i = -3;
    do {
        echo '$i=',$i;
        $i++;
    } while($i >= 0);

    // for
    for($i = 1, $sum = 0; $i <= 100; $i++) {
        $sum += $i;
    }
    echo '1~100之间的和是' , $sum;

    // 1～100之间的偶数和
    for($i = 1, $sum = 0; $i <= 100; $i++) {
        if($i % 2 == 0) {
            $sum += $i;
        }
    }
    echo "1～100之间的偶数和是" , $sum;

    // 输出1～100之间的偶数
    for($i = 1; $i <= 100; $i++) {
        if($i % 2 == 0) {
            echo $i;
        }
    }

    // continue break
    // continue 跳过当次
    // 求1～100之间的奇数和
    echo "<br />";
    for($i = 1, $sum = 0; $i <= 100; $i++) {
        if($i % 2 == 0) {
            continue;
        }
        $sum += $i;
    }
    echo "1～100之间的奇数和是" , $sum;

    // break
    // 体育课上，需要跑5圈，当跑到第3圈的时候，腿断了，跑不了了。。。
    echo "<br />";
    for($i = 1; $i <= 5; $i++) {
        echo "当前是第" , $i , "圈<br />";
        if($i == 3) {
            break;
        }
    }

    // goto

    // 生成X行Y列的表格
    // 奇数行为白色，偶数行为灰色
    $row = 5;
    $col = 10;
    echo '<table border="1">';
        echo '<tr>';
            for($j = 1; $j <= $col; $j++) {
                echo '<th>我是表头</th>';
            }
        echo '</tr>';
        for($i = 1; $i <= $row; $i++) {
            $color = ($i % 2 == 0) ? "gray" : "white";
            echo '<tr bgcolor="' . $color . '">';
            for($j = 1; $j <= $col; $j++) {
                echo '<td>&nbsp;&nbsp;</td>';
            }
            echo '</tr>';
        }
    echo '</table>';

    echo '<br>';
    // 练习1：增加数字，实现九九乘法表
    $num = 9;
    echo '<table border="1">';
    echo '<tr>';
    for($i = 1; $i <= $num; $i++) {
        echo '<th>' . $i . '</th>';
    }
    echo '</tr>';
    for($i = 1; $i <= $num; $i++) {
        $color = ($i % 2 == 0) ? "gray" : "white";
        echo '<tr bgcolor="'.$color.'">';
        for($j = 1; $j <= $i; $j++) {
            echo '<td>' . $j . '*' . $i . '=' . $i*$j . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    // 练习2：输出1～100之间的素数
    echo '所有素数：<br />';
    for($i = 2; $i <= 100; $i++) {
        for($j = 2; $j <= $i; $j++) {
            if($i % $j == 0 && $i != $j) {
                break;
            }
            if($j == $i) {
                echo $i . '  ';
            }
        }
    }
    echo '<br />';

    // 练习3：小智，小霞，小刚各有若干个球，其中小智和小霞共有25个球
    // 小智和小刚共有31个球，小霞和小刚共有28个球，求每个人有多少个球
    for($i = 0; $i <= 31; $i++) {
        for($j = 0; $j <= 28; $j++) {
            for($k = 0; $k <= 31; $k++) {
                if($i + $j == 25 && $i + $k == 31 && $j + $k == 28) {
                    echo "小智：" . $i . "<br />";
                    echo "小霞：" . $j . "<br />";
                    echo "小刚：" . $k . "<br />";
                }
            }
        }
    }

