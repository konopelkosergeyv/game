<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\sectors\Sector;

/**
 * Interface SectorsFactory
 * @package game\factories
 */
interface SectorsFactory
{
    /**
     * @param $width
     * @param $height
     * @return Sector
     */
    public function getSector($width, $height);

}