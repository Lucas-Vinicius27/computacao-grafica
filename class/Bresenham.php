<?php
/**
 * Description of Bresenham
 * classe de rasterização
 */
class Bresenham
{
    private $dx, $dy, $incrE, $incrNE, $d, $x, $y;
    
    function rasteriza($x,$y)
    {
        $this->dx = $x[1] - $x[0];
        $this->dy = $y[1] - $y[0];
        $this->d = (2 * $this->dy) - $this->dx;
        $this->incrE = 2 * $this->dy;
        $this->incrNE = 2 * ($this->dy - $this->dx);
        $this->x = $x[0];
        $this->y = $y[0];
        echo "Coordenadas da Linha:<br>";
        echo "($this->x,$this->y)<br>";
        while($this->x < $x[1])
        {
            if($this->d <= 0)
            {
                $this->d += $this->incrE;
                $this->x += 1;
            }
            else
            {
                $this->d += $this->incrNE;
                $this->x += 1;
                $this->y += 1;
            }
            echo "($this->x,$this->y)<br>";
        }
    }
}