<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\sectors\Water;

/**
 * Class WattersFactory
 * @package game\factories
 */
class WattersFactory implements SectorsFactory
{
    /**
     * @param $width
     * @param $height
     * @return Water
     */
    public function getSector($width, $height)
    {
        $sector = new Water();
        $sector->setCoordinates($width,$height);
        return $sector;
    }

}