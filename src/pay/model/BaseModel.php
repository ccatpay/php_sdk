<?php
/**
 * ================================================
 * 日期: 2022/8/25
 *
 */

namespace Pay\model;

class BaseModel
{
    public function toArray() {
        $arr = [];
        $_arr =get_object_vars($this);
        foreach ($_arr as $key => $val) {
            $arr[$key] = $val;
        }
        return $arr;
    }
}