<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\objects\Aircraft;

/**
 * Class AircraftsFactory
 * @package game\factories
 */
class AircraftsFactory implements UnitsFactory
{
    /**
     * @return Aircraft
     */
    public function getUnit($player)
    {
        $unit = new Aircraft();
        $unit->setPlayer($player);
        return $unit;
    }
}