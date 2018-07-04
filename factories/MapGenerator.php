<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\Map;
use game\objects\Base;
use game\objects\Unit;
use game\sectors\Sector;

/**
 * Class MapGenerator
 * @package game\factories
 */
class MapGenerator
{
    /**
     * @var int
     */
    public $width = 30;

    /**
     * @var int
     */
    public $height = 30;

    /**
     * @var int
     */
    public $players = 2;

    /**
     * @var int
     */
    public $units = 10;

    /*
     * @var Sector[]
     */
    protected $sectors = [];

    /**
     * @var Map
     */
    private $map;

    /**
     * MapGenerator constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        if ($this->width <= 0) {
            throw new \Exception('Ширина карты должна быть больше нуля');
        }

        if ($this->height <= 0) {
            throw new \Exception('Высота карты должна быть больше нуля');
        }

        if ($this->players < 2) {
            throw new \Exception('Должно быть не менне двух игроков');
        }
    }

    /**
     * @return Map
     */
    public function getMap()
    {
        if (!$this->map) {
            $this->map = new Map();
        }

        return $this->map;
    }

    public function generate()
    {
        $this->generateSectors();

        for ($player = 0; $player < $this->players; $player++) {
            $this->initializeBase($player);
            for ($unit = 0; $unit < $this->units; $unit++) {
                $this->initializeUnits($player);
            }
        }

        $sectors = array_merge(array_values($this->sectors));

        foreach ($sectors as $sector) {
            $this->getMap()->pushSector($sector);
        }

        return $this;

    }

    protected function generateSectors()
    {
        $generator = new SectorGenerator();
        for ($h = 0; $h <= $this->height; $h++) {
            for ($w = 0; $w <= $this->width; $w++) {
                $sector = $generator->generateRandomSector($w, $h);
                $this->sectors[$sector->getType()][] = $sector;
            }
        }
    }

    /**
     * @param integer $player
     * @return boolean
     */
    protected function initializeBase($player)
    {
        $factory = new BasesFactory();
        $types = Base::getAvailablePlacements();
        foreach ($types as $type) {
            if (isset($this->sectors[$type]) && count($this->sectors[$type]) > 0) {
                $coordinates = array_rand($this->sectors[$types[0]]);
                /**
                 * @var $sector Sector
                 */
                $sector = $this->sectors[$type][$coordinates];
                $sector->setAlocatedObject($factory->getBase($player));
                $this->getMap()->pushSector($sector);
                unset($this->sectors[$type][$coordinates]);
                return true;
            }
        }
        return false;
    }

    /**
     * @param integer $player
     * @return boolean
     */
    protected function initializeUnits($player)
    {
        $factory = new UnitsGenerator();
        $unit = $factory->generateRandomUnit($player);

        /**
         * @var Unit $unit
         */
        $types = $unit::getAvailablePlacements();
        foreach ($types as $type) {
            if (isset($this->sectors[$type]) && count($this->sectors[$type]) > 0) {
                $coordinates = array_rand($this->sectors[$types[0]]);
                /**
                 * @var $sector Sector
                 */
                $sector = $this->sectors[$type][$coordinates];
                $sector->setAlocatedObject($unit);
                $this->getMap()->pushSector($sector);
                unset($this->sectors[$type][$coordinates]);
                return true;
            }
        }
        return false;
    }

}