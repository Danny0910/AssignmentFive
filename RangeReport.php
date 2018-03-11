<?php
require_once 'Report.php';

class RangeReport extends Report {
    
    private $start;
    private $end;
    
    // return the title of the report as a string
    public function getTitle():string {
        return "Number Range Generation";
    }
    
    // return the description of the report as a string
    public function getReportDescription():string {
        return "Prints every integer from START to END separated by a space.";
    }
    
    // return the parameters given to the report as a string
    public function getParameterString():string {
        return "START: $this->start\nEND: $this->end";
    }
    
    // return the result of the report computation
    public function getReportResultString():string {
        $result = [];
        for($i = $this->start; $i <= $this->end; $i++){
            $result[]= $i;
        }
        return implode(" ",$result);
    }

    public function __construct($start_value,$end_value){
        parent::__construct();
        $this->start = filter_var($start_value, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 100]]);
        if(!$this->start){
            throw new Exception("Bad start value.");
        }
        $this->end = filter_var($end_value, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 100]]);
        if(!$this->end){
            throw new Exception("Bad end value.");
        }
    }

}

?>