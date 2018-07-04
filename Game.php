<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */

/**
 * Class Game
 * @package game
 */
final class Game
{
    /**
     * @var self
     */
    private static $instance;

    /**
     * @var \game\Map
     */
    private $map;


    /**
     * @return Game
     */
    public static function getGame()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function run()
    {
        $this->map = (new \game\factories\MapGenerator())->generate()->getMap();

        return $this;
    }

    /**
     * @return \game\Map
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @return mixed
     */
    public function setMap(\game\Map $map)
    {
        $this->map = $map;
        return $this;
    }

    /**
     * Game constructor.
     */
    private function __construct()
    {
    }

    /**
     *
     */
    private function __clone()
    {
    }

    /**
     *
     */
    private function __sleep()
    {
    }

    /**
     *
     */
    private function __wakeup()
    {
    }
}
