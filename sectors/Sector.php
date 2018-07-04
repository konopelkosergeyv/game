<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

namespace game\sectors;
use game\objects\Base;
use game\objects\Unit;


/**
 * Class Sector
 * @package game\sectors
 */
abstract class Sector implements SectorInterface
{
    /**
     *
     */
    const TYPE_WATTER = 'watter';
    /**
     *
     */
    const TYPE_MOUNTAIN = 'mountain';
    /**
     *
     */
    const TYPE_PLAIN = 'plain';
    /**
     *
     */
    const TYPE_SWAMP = 'swamp';

    /**
     * @var integer
     */
    protected $width;
    /**
     * @var integer
     */
    protected $heigth;
    /**
     * @var Unit | Base
     */
    protected $alocatedObject;

    /**
     * @return string
     */
    public function getCoordinates()
    {
        return $this->width . '-' . $this->heigth;
    }

    /**
     * @param $width
     * @param $heigth
     */
    public function setCoordinates($width, $heigth)
    {
        $this->width = (int)$width;
        $this->height = (int)$heigth;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFree()
    {
        return !(bool)$this->alocatedObject;
    }

    /**
     * @return mixed
     */
    public function getAlocatedObject()
    {
        return $this->alocatedObject;
    }

    /**
     * @param mixed $alocatedObject
     */
    public function setAlocatedObject($alocatedObject)
    {
        $this->alocatedObject = $alocatedObject;
        return $this;
    }

    /*
     *
     */
    public function save()
    {
        \Game::getGame()->getMap()->pushSector($this);
        return $this;
    }

    /**
     *
     */
    public function release()
    {
        $this->unit = null;
        return $this;
    }

    /**
     * @return array
     */
    public static function getTypes()
    {
        return [
            self::TYPE_WATTER,
            self::TYPE_SWAMP,
            self::TYPE_PLAIN,
            self::TYPE_MOUNTAIN,
        ];
    }
}