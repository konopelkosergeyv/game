<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\objects;

use game\sectors\Sector;

/**
 * Class Soldier
 * @package game\objects
 */
class Soldier extends Unit
{
    /**
     * @return array
     */
    public static function getAvailablePlacements()
    {
        return [
            Sector::TYPE_WATTER,
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
            self::TYPE_SOLDIER,
            self::TYPE_VEHICLE,
        ];
    }

    /**
     * @return string
     */
    public function getType()
    {
        return self::TYPE_SOLDIER;
    }
}
