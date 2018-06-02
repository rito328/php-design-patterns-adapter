<?php
namespace App\Car;

use App\Car\Interfaces\ElectricEngineInterface;

class HybridCar extends Automobile implements ElectricEngineInterface
{
    public function electricOutput($ratio)
    {
        return sprintf('電気：%d ％', $ratio);
    }

    public function running()
    {
        // ガソリン出力
        echo sprintf('[出力] %s', $this->gasolineOutput(50));
        echo '<br>';
        // 電気出力
        echo sprintf('[出力] %s', $this->electricOutput(50));
    }

}