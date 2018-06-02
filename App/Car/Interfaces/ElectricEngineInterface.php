<?php
namespace App\Car\Interfaces;

interface ElectricEngineInterface
{
    public function electricOutput($ratio);
}