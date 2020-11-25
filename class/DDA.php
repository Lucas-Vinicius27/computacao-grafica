<?php
/**
 * Description of DDA
 * classe de rasterização
 */
require_once 'Pontos.php';

class DDA
{
    function rasteriza($ini, $fim)
    {
        $pontos = array();
        $step;
        
        if(abs($fim->x - $ini->x) >= abs($fim->y - $ini->y))
        {
            $step = abs($fim->x - $ini->x);
        }
        else
        {
            $step = abs($fim->y - $ini->y);
        }

        $deltax = ($fim->x - $ini->x) / $step;
        $deltay = ($fim->y - $ini->y) / $step;
        $x      = $ini->x;
        $y      = $ini->y;

        for($i = 0; $i < $step; $i++)
        {
            $pontos[] = new Pontos(floor($x), floor($y));
            $x        += $deltax;
            $y        += $deltay;
        }

        $pontos[] = new Pontos(floor($x), floor($y));

        return $pontos;
    }
}