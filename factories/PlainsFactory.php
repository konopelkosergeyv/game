<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\sectors\Plain;

/**
 * Class PlainsFactory
 * @package game\factories
 */
class PlainsFactory implements SectorsFactory
{
    /**
     * @param $width
     * @param $height
     * @return Plain
     */
    public function getSector($width, $height)
    {
        $sector = new Plain();
        $sector->setCoordinates($width,$height);
        return $sector;
    }

}