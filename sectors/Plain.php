<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\sectors;

/**
 * Class Plain
 * @package game\sectors
 */
class Plain extends Sector
{
    /**
     * @return string
     */
    public function getType()
    {
        return self::TYPE_PLAIN;
    }

}