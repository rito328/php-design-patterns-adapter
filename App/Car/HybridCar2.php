<?php
namespace App\Car;

use App\Car\Interfaces\ElectricEngineInterface;

class HybridCar2 implements ElectricEngineInterface
{
    protected $automobile;

    public function __construct()
    {
        $this->automobile = new Automobile();
    }

    public function electricOutput($ratio)
    {
        return sprintf('電気：%d ％', $ratio);
    }

    public function running()
    {
        // ガソリン出力
        echo sprintf('[出力] %s', $this->automobile->gasolineOutput(50));

        echo '<br>';

        // 電気出力
        echo sprintf('[出力] %s', $this->electricOutput(50));
    }

}