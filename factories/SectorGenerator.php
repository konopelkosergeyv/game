<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\factories;

use game\sectors\Sector;

/**
 * Class SectorGenerator
 * @package game\factories
 */
class SectorGenerator
{
    /**
     * @param $width
     * @param $height
     * @return \game\sectors\Mountain|\game\sectors\Plain|\game\sectors\Swamp|\game\sectors\Water
     */
    public function generateRandomSector($width, $height)
    {
        $type = array_rand(array_flip(Sector::getTypes()));
        $factory = $this->getFactory($type);
        return $factory->getSector($width, $height);
    }

    /**
     * @param $type
     * @return MountainsFactory|PlainsFactory|SwampsFactory|WattersFactory
     * @throws \Exception
     */
    protected function getFactory($type)
    {
        switch ($type) {
            case Sector::TYPE_WATTER:
                return new WattersFactory();
            case Sector::TYPE_MOUNTAIN:
                return new MountainsFactory();
            case Sector::TYPE_PLAIN:
                return new PlainsFactory();
            case Sector::TYPE_SWAMP:
                return new SwampsFactory();
            default:
                throw new \Exception('Такой фабрики не существует');

        }
    }
}