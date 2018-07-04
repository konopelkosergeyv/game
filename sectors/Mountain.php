<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\sectors;

/**
 * Class Mountain
 * @package game\sectors
 */
class Mountain extends Sector
{
    /**
     * @return string
     */
    public function getType()
    {
        return self::TYPE_MOUNTAIN;
    }

}