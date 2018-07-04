<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\objects\Unit;

/**
 * Interface UnitsFactory
 * @package game\factories
 */
interface UnitsFactory
{

    /**
     * @return Unit
     */
    public function getUnit($player);

}