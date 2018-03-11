<?php
require_once 'Report.php';

class MinMaxReport extends Report {

    private $arr_integers;

    // return the title of the report as a string
    public function getTitle():string {
        return "Minimum and Maximum Finder";
    }
    
    // return the description of the report as a string
    public function getReportDescription():string {
        return "Find the minimum and maximum of the given integers.";
    }
    
    // return the parameters given to the report as a string
    public function getParameterString():string {
        return "INTEGERS: ".implode(", ",$this->arr_integers);;
    }
    
    // return the result of the report computation
    public function getReportResultString():string {
        sort($this->arr_integers);
        $min = $this->arr_integers[0];
        $max = $this->arr_integers[count($this->arr_integers)-1];
        return "MINIMUM: $min\nMAXIMUM: $max";
    }
    
    public function __construct($arr){
        parent::__construct();
        $this->arr_integers = $arr;
    }

}

?>