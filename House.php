<?php
    class House {
        public $wallColor = "White";
        public $noOfDoor = 2;
        public $floorSize = "50sqm";

        public function turnOnLights(){
            echo "Lights open";

        }
    }

    class SmallHouse extends House {
        public $floorSize = "20sqm";
    
        public function turnOnLights(){
            echo "Small Lights open";

        }
    
    }


?>