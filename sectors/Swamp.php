<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\sectors;

/**
 * Class Swamp
 * @package game\sectors
 */
class Swamp extends Sector
{
    /**
     * @return string
     */
    public function getType()
    {
        return self::TYPE_SWAMP;
    }

}