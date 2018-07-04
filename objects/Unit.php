<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\objects;
use game\sectors\Sector;

/**
 * Class Unit
 * @package game\objects
 */
abstract class Unit implements MapObjectsInterface, UnitsInterface
{
    /**
     *
     */
    const TYPE_AIRCRAFT = 'aircraft';
    /**
     *
     */
    const TYPE_SOLDIER = 'soldier';
    /**
     *
     */
    const TYPE_VEHICLE = 'vehicle';

    /**
     * @var
     */
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
     * @param $unitType string
     * @return bool
     */
    public function canAttack($unitType)
    {
        return in_array($unitType, $this->getAttackUnits());
    }

    /**
     * @param $sectorType string
     * @return bool
     */
    public function canMove($sectorType)
    {
        return in_array($sectorType, self::getAvailablePlacements());
    }

    /**
     * @param Sector $fromSector
     * @param Sector $toSector
     * @return bool
     */
    public function move(Sector $fromSector, Sector $toSector)
    {
        if (!$this->canMove($toSector->getType()) || !$toSector->isFree()){
            return false;
        }
        $toSector->setAlocatedObject($this)->save();
        $fromSector->release()->save();

        return true;
    }

    /**
     * @param Unit $unit
     * @return bool
     */
    public function attack(Unit $unit)
    {
        if (!$this->canAttack($unit->getType()) || !$this->isEnemy($unit)){
            return false;
        }

        // Нанаесение урона или уничтожение юнита

        return true;
    }

    /**
     * @param Unit $unit
     * @return bool
     */
    public function isEnemy(Unit $unit){
        return $unit->player != $this->player;
    }

    /**
     * @return array
     */
    public static function getTypes()
    {
        return [
            self::TYPE_SOLDIER,
            self::TYPE_AIRCRAFT,
            self::TYPE_VEHICLE,
        ];
    }


}