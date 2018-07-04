<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\objects;

use game\sectors\Sector;

class Base implements MapObjectsInterface
{
    protected $player;

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param mixed $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * @return array
     */
    public static function getAvailablePlacements()
    {
        return [
            Sector::TYPE_PLAIN,
        ];
    }
}