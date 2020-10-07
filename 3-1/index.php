<?php
    class Taiyaki {
        public $content;
    
        public function __construct($nakami) {
            $this->content = $nakami;
        } 
    
        public function whatIsContent() {
            echo '中身は'.$this->content.'だよ。';
        }
    }
    // あんこのたい焼き 
    $taiyaki_anko = new Taiyaki("あんこ"); 
    $taiyaki_anko->whatIsContent(); 
    // クリームのたい焼き
    $taiyaki_cream = new Taiyaki("クリーム");
    $taiyaki_cream->whatIsContent();
    echo "<br>";
    echo "<br>";
    ?>


    <?php
    
    class Enemy {
        public $name;
        public $stamina;
        public $attack;
        public static $count = 0;
       

        public function __construct($name, $stamina=100, $attack=10){
            $this->name = $name;
            $this->stamina = $stamina;
            $this->attack = $attack;
            Self::$count += 1;
    
        }

        public function sayMyname(){
            echo $this->name."が現れた！";
            echo "<br>";
        }

        public function powerUP(){
            $this->attack += 10;
            echo "攻撃力が".$this->attack."になった。";
            echo "<br>";
        }

        public function getCount(){
            echo Self::$count."体の敵が現れた";
            echo "<br>";
        }

    }

    $slime = new Enemy("スライム");
    $slime->sayMyname();
    $slime->powerUP();
    $slime->powerUP();
    $slime->powerUP();

    $slime_A = new Enemy("スライムA");
    $slime_B = new Enemy("スライムB");
    $slime_C = new Enemy("スライムC");
    $slime_D = new Enemy("スライムD");
    Enemy::getCount();



    $kuribo = new Enemy("クリボー");
    $kuribo->sayMyname();
    $kuribo->powerUP();


    class Boss extends Enemy{
        public function specialAttack(){
            echo "すごい強い一撃！";
        }
    }

    $boss = new Boss("竜王");
    $boss->sayMyname();
    $boss->specialAttack();
    

    ?>