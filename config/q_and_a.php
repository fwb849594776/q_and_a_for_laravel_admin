<?php

return [

    //试卷类别
    'type' => [
//        1 => '语文',
//        2 => '英语',
//        3 => '历史',
    ],

    //试卷等级(难度)
    'train_level' => [
//        1 => '一级',
//        2 => '二级',
//        3 => '三级',
//        4 => '四级',
//        5 => '五级',
//        6 => '六级',
//        7 => '七级',
//        8 => '八级',
//        9 => '九级',
//        10 => '十级',
    ],

    //试卷初始展示时默认的问题数
    'default_question_count' => 1,

    //试卷默认的考试可用时长(分钟)
    'default_can_use_time' => 0,// 0 表示无时间限定

    //问题选项值
    'question_option'=> ['a','b','c','d'] //注意：应该是小写的26个英文字母,并且请安顺序书写

];
