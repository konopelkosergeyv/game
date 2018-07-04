<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\objects\Unit;

/**
 * Class UnitsGenerator
 * @package game\factories
 */
class UnitsGenerator
{
    /**
     * @return \game\objects\Aircraft|\game\objects\Soldier|\game\objects\Unit|\game\objects\Vehicle
     */
    public function generateRandomUnit($player)
    {
        $type = array_rand(array_flip(Unit::getTypes()));
        $factory = $this->getFactory($type);
        return $factory->getUnit($player);
    }

    /**
     * @param $type
     * @return AircraftsFactory|SoldiersFactory|VehiclesFactory
     * @throws \Exception
     */
    protected function getFactory($type)
    {
        switch ($type) {
            case Unit::TYPE_AIRCRAFT:
                return new AircraftsFactory();
            case Unit::TYPE_SOLDIER:
                return new SoldiersFactory();
            case Unit::TYPE_VEHICLE:
                return new VehiclesFactory();
            default:
                throw new \Exception('Такой фабрики не существует');
        }
    }
}