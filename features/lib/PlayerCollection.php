<?php
require_once __DIR__.'/../lib/Player.php';

class PlayerCollection implements IteratorAggregate {

    protected $players;

    public function __construct() {
        $this->players = new ArrayIterator(array());
    }

    public function getIterator() {
        return new InfiniteIterator($this->players);
    }

    public function add(Player $player) {
        $this->players[] = $player;
    }

    public function first() {
        return $this->players[0];
    }

    public function next() {
        return next($this->players);
    }
}
