<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\objects\Vehicle;

/**
 * Class VehiclesFactory
 * @package game\factories
 */
class VehiclesFactory implements UnitsFactory
{
    /**
     * @return Vehicle
     */
    public function getUnit($player)
    {
        $unit = new Vehicle();
        $unit->setPlayer($player);
        return $unit;
    }

}
