<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getPerimeter($radius)
    {
        return pi() * $radius * $radius;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function getBaseArea($radius)
    {
        return 2 * pi() * $radius;
    }
}