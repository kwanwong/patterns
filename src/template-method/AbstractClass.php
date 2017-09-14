<?php
/**
 * Created by PhpStorm.
 * User: Kwan Wong
 * Date: 2017/9/14
 * Time: 16:15
 */

namespace TemplateMethod;

/**
 * 模板方法模式
 *
 * Class AbstractClass
 * @package TemplateMethod
 */
abstract class AbstractClass
{
    /**
     * 模板方法模式
     * 将具体逻辑拆分为多个抽象方法，由子类实现
     */
    public function templateMethod()
    {
        $this->operation1();
        $this->operation2();
    }

    /**
     * 基本方法1
     * @return mixed
     */
    abstract protected function operation1();

    /**
     * 基本方法2
     * @return mixed
     */
    abstract protected function operation2();
}