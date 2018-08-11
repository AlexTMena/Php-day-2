<?php

class ComputeGrades {

    private $average = 0;

    function __construct($math, $eng, $sci, $comp) {
        
        $getAverage = $this->computeAverage($math, $eng, $sci, $comp);
        $this->computeTwentyPercent();
        $this->computeTwentyPercent2($getAverage);
    }

    private function computeAverage($math, $eng, $sci, $comp) {
        $this->average = ($math + $eng + $sci + $comp)/4;
        echo "Final grade is $this->average <br>";


        $localAverage = ($math + $eng + $sci + $comp)/4;
        return $localAverage;
    }

    private function computeTwentyPercent() {
        echo $this->average *.2;
        echo "<br>";
    }

    private function computeTwentyPercent2($getAverage) {
        echo $getAverage *.2;
        echo "<br>";
    }
}
?>