<?php

namespace Amsterdan\BankCard;

/**
 * 银行卡类型
 */
class Types
{
    public static $map = [
        'DC'  => '储蓄卡',
        'CC'  => '信用卡',
        'SCC' => '准贷记卡',
        'PC'  => '预付费卡',
    ];

    /**
     * 获取银行卡类型描述
     *
     * @param  string         $key
     * @return array/string
     */
    public static function get($key = null)
    {
        if (is_null($key)) {
            return self::$map;
        }
        return isset(self::$map[$key]) ? self::$map[$key] : '';
    }
}
