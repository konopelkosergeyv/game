<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\objects\Soldier;

/**
 * Class SoldiersFactory
 * @package game\factories
 */
class SoldiersFactory implements UnitsFactory
{
    /**
     * @return Soldier
     */
    public function getUnit($player)
    {
        $unit = new Soldier();
        $unit->setPlayer($player);
        return $unit;
    }
}