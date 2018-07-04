<?php
/**
 * @author Sergey Konopelko <konopelkosergeyv@gmail.com>
 * @copyright Copyright (c) 2018.
 */


Game::getGame()->run();

// Перемещение юнита с сектора 1-1 в 1-4
$from = Game::getGame()->getMap()->getSector('1-1');
$to = Game::getGame()->getMap()->getSector('1-4');
$unit = $from->getAlocatedObject();

if ($unit instanceof \game\objects\Unit) {
    $unit->move($from, $to);
}

// Атака юнита в секторе 2-6 юнитом в секторе 4-1
$attackUnit = Game::getGame()->getMap()->getSector('4-1')->getAlocatedObject();
$attackedUnit = Game::getGame()->getMap()->getSector('2-6')->getAlocatedObject();

if ($attackUnit instanceof \game\objects\Unit) {
    $unit->attack($attackedUnit);
}