<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\objects;

use game\sectors\Sector;

/**
 * Class Vehicle
 * @package game\objects
 */
class Vehicle extends Unit
{
    /**
     * @return array
     */
    public static function getAvailablePlacements()
    {
        return [
            Sector::TYPE_SWAMP,
            Sector::TYPE_PLAIN,
        ];
    }

    /**
     * @return array
     */
    public function getAttackUnits()
    {
        return [
            self::TYPE_SOLDIER,
            self::TYPE_VEHICLE,
        ];
    }

    /**
     * @return string
     */
    public function getType()
    {
        return self::TYPE_AIRCRAFT;
    }
}
