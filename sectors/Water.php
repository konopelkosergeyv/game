<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\sectors;

/**
 * Class Water
 * @package game\sectors
 */
class Water extends Sector
{
    /**
     * @return string
     */
    public function getType()
    {
        return self::TYPE_WATTER;
    }
}