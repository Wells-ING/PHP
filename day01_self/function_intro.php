<?php
    // 函数：function 是一种语法结构，将实现某个功能的代码块（多行代码）封装到一个结构中，从而实现代码的重复利用（复用）
    // 函数有对应的关键点：function 关键字、函数名、参数（形参和实参）、函数体和返回值
    // 基本语法如下
    /*
     * function 函数名(参数) {
     *  // 函数体
     *  // 返回值；
     *  // return 结果;
     * }
     */
    // 定义函数的目的：是为了实现代码的重复利用，一个功能一个函数（简单明了）

    // 定义函数
    function display() {
        // 函数体
        echo 'Hello World';  // 没有返回值
    }

    // 函数的使用：通过访问函数的名字 + ()
    // 如果函数在定义的过程中有参数，那么在调用的时候就必须有对应的参数
    // 函数是一种结构，不会自动运行，必须调用才能运行

    // 调用函数
    display();

    // 函数是在代码执行阶段，碰到函数名字的时候才会调用，不是在编译阶段
    // 函数的调用特点：只要系统在内存中能够找到对应的函数，就可以执行（文件中函数调用可以在函数定义之前）

    // 函数执行的内存分析
    // 1. 读取代码进入到代码段（编译：将代码编译字节码存储到内存）
    // 2. 根据代码逐行执行

    // 以上原因：编译和执行是分开的（先编译后执行）

    // 函数命名规范：由字母、数字和下划线组成，但是不能以数字开头
    // 函数作为一种常用的结构 一般遵循一下规则：函数名通常每次代表着函数的功能，而有些功能会比较复杂，可能一个单词不足以表达，需要多个组合
    // 1. (小)驼峰法：除了左边第一个单词外，后面所有的单词首字母都大写：showParentInfo()
    // 2. 下划线法：单词之间通过下划线连接，单词都是小写：show_parent_info()

    // 函数名字：在一个脚本周期中，不允许出现同名函数(通常在一个系统开发中都不会使用同名函数)
