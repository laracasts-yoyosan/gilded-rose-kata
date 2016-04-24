<?php

namespace App;

use App\Items\Brie;
use App\Items\Item;
use App\Items\Normal;
use App\Items\Sulfuras;
use App\Items\BackstagePass;
use App\Items\ConjuredManaCake;

class GildedRose
{
    protected static $lookup = [
        'normal' => Normal::class,
        'Aged Brie' => Brie::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackstagePass::class,
        'Conjured Mana Cake' => ConjuredManaCake::class,
    ];

    public static function of($name, $quality, $sellIn)
    {
        $class = isset(static::$lookup[$name]) ? static::$lookup[$name] : Item::class;

        return new $class($quality, $sellIn);
    }
}
