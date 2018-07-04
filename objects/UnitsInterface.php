<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\objects;

/**
 * Interface UnitsInterface
 * @package game\objects
 */
interface UnitsInterface
{
    /**
     * @return mixed
     */
    public function getAttackUnits();

    /**
     * @return mixed
     */
    public function getType();
}