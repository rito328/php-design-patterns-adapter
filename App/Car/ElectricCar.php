<?php
namespace App\Car;

use App\Car\Interfaces\ElectricEngineInterface;

class ElectricCar implements ElectricEngineInterface
{
    public function electricOutput($ratio)
    {
        return sprintf('電気：%d ％', $ratio);
    }

    public function running()
    {
        echo sprintf('[出力] %s', $this->electricOutput(100));
    }
}