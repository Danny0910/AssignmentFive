<?php
require_once 'Report.php';

class SumReport extends Report {
    
    private $arr_integers;

    // return the title of the report as a string
    public function getTitle():string {
        return "Sum Calculator";
    }
    
    // return the description of the report as a string
    public function getReportDescription():string {
        return "Sums the given integers.";
    }
    
    // return the parameters given to the report as a string
    public function getParameterString():string {
        return "INTEGERS: ".implode(", ",$this->arr_integers);
    }
    
    // return the result of the report computation
    public function getReportResultString():string {
        $sum = 0;
        foreach($this->arr_integers as $value){
            $sum += $value;
        }
        return $sum;
    }

    public function __construct($arr){
        parent::__construct();
        $this->arr_integers = $arr;
    }

}

?>