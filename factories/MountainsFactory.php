<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\sectors\Mountain;

/**
 * Class MountainsFactory
 * @package game\factories
 */
class MountainsFactory implements SectorsFactory
{
    /**
     * @param $width
     * @param $height
     * @return Mountain
     */
    public function getSector($width, $height)
    {
        $sector = new Mountain();
        $sector->setCoordinates($width,$height);
        return $sector;
    }

}