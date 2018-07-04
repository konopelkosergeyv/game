<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\sectors\Swamp;

/**
 * Class SwampsFactory
 * @package game\factories
 */
class SwampsFactory implements SectorsFactory
{
    /**
     * @param $width
     * @param $height
     * @return Swamp
     */
    public function getSector($width, $height)
    {
        $sector = new Swamp();
        $sector->setCoordinates($width,$height);
        return $sector;
    }

}