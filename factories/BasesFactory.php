<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */
namespace game\factories;

use game\objects\Base;

/**
 * Class BasesFactory
 * @package game\factories
 */
class BasesFactory
{
    /**
     * @param $player
     * @return Base
     */
    public function getBase($player)
    {
        $base = new Base();
        $base->setPlayer($player);
        return $base;
    }

}
