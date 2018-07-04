<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\objects;

/**
 * Interface MapObjectsInterface
 * @package game\objects
 */
interface MapObjectsInterface
{
    /**
     * @return array
     */
    public static function getAvailablePlacements();
}