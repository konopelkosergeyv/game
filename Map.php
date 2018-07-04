<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game;

use game\sectors\Sector;

/**
 * Class Map
 * @package game
 */
class Map
{
    /**
     * @var Sector[]
     */
    private $sectors;

    /**
     * @param Sector $sector
     */
    public function pushSector(Sector $sector)
    {
        $this->sectors[$sector->getCoordinates()] = $sector;
    }

    /**
     * @param $id
     * @return Sector|null
     */
    public function getSector($id)
    {
        return isset($this->sectors[$id]) ? $this->sectors[$id] : null;
    }

}