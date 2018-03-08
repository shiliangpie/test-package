<?php
/**
 * Created by AK.
 * Date: 2018/3/8
 * Time: 10:24
 */

namespace Shiliangpie\TestPackage;


class Client
{
    protected $num1;
    protected $num2;

    public function __construct(int $num1, int $num2)
    {
        $this->num1 = $num1 + 1;
        $this->num2 = $num2;
    }

    public function addTogether()
    {
        return $this->num1 + $this->num2;
    }
}