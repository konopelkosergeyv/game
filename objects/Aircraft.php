<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\objects;

use game\sectors\Sector;

/**
 * Class Aircraft
 * @package game\objects
 */
class Aircraft extends Unit
{
    /**
     * @return array
     */
    public static function getAvailablePlacements()
    {
        return [
            Sector::TYPE_WATTER,
            Sector::TYPE_SWAMP,
            Sector::TYPE_PLAIN,
            Sector::TYPE_MOUNTAIN,
        ];
    }

    /**
     * @return array
     */
    public function getAttackUnits()
    {
        return [
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
