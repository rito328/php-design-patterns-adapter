<?php
namespace App\Car;

use App\Car\Interfaces\gasolineEngineInterface;

class Automobile implements gasolineEngineInterface
{
    public function gasolineOutput($ratio)
    {
        return sprintf('ガソリン：%d ％', $ratio);
    }

    public function running()
    {
        echo sprintf('[出力] %s', $this->gasolineOutput(100));
    }

}