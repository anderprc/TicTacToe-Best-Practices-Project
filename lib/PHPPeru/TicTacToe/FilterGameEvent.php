<?php

namespace PHPPeru\TicTacToe;

use Symfony\Component\EventDispatcher\Event;

/**
 * FilterSwitcherEvent
 */
class FilterSwitcherEvent extends Event
{
    protected $order;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    public function getPlayer()
    {
        return $this->player;
    }
}