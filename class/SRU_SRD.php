<?php

/**
 * Description of SRU_SRD
 * classe de mapeamento
 */
class SRU_SRD
{
    private $xd;
    private $yd;

    function conver_x($xu)
    {
        if ($xu == 0) {
            $this->xd = $xu;
        } else {
            $this->xd = $xu * 1024;
            $this->xd = $this->xd / 10;
        }
        echo $this->xd;
    }

    function conver_y($yu)
    {
        if ($yu == 0) {
            $this->yd = $yu;
        } else {
            $this->yd = $yu * 768;
            $this->yd = $this->yd / 8;
        }
        echo $this->yd;
    }
}
