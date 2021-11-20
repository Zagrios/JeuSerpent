<?php

class Player{

    private $name;
    private $score;

    public function __construct(string $name){
        $this->name = $name;
        $this->score = 0;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getScore(): int{
        return $this->score;
    }

    public function addScore(int $s){
        $this->score += $s;
        $this->score = $this->score > 50 ? 25 : $this->score;
    }

}

?>