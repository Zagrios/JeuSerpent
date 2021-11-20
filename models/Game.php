<?php

require_once WEB_ROOT."models/Player.php";

class Game{

    private $p1;
    private $p2;

    private $p1Round;

    public function __construct(string $p1, string $p2){
        $this->p1 = new Player($p1);
        $this->p2 =new Player($p2);
        $this->p1Round = true;
    }

    public function getP1(): Player{
        return $this->p1;
    }

    public function getP2(): Player{
        return $this->p2;
    }

    public function getCurrentPlayer(): Player{
        return $this->p1Round ? $this->p1 : $this->p2;
    }

    public function play(): void{
        $scoreToAdd = random_int(1, 6);
        $this->getCurrentPlayer()->addScore($scoreToAdd);
        $this->p1Round = !$this->p1Round;
    }

    public function getWinner(){
        if($this->p1->getScore() == 50){ return $this->p1; }
        if($this->p2->getScore() == 50){ return $this->p2; }
        return false;
    }

    public function gridToHtml(): string{
        $html = "<table>";
        $count = 1;
        for($i = 0; $i < 5; $i++){
            $html .= "<tr>";
            for($j = 0; $j < 10; $j++){
                $html .= "<td>".$count."</td>";
                $count += 1;
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        return $html;
    }

    

}

?>