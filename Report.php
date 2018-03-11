<?php
abstract class Report {
    
    private $generation_time_stamp;
    
    // return the title of the report as a string
    public abstract function getTitle():string;
    
    // return the description of the report as a string
    public abstract function getReportDescription():string;
    
    // return the parameters given to the report as a string
    public abstract function getParameterString():string;
    
    // return the result of the report computation
    public abstract function getReportResultString():string;
    
    // returns the value of the private property $generation_time_stamp
    protected function getGenerationTimeStamp():string {
        return $this->generation_time_stamp;
    }
    
    // prints all the report information to the terminal
    public function printToTerminal():void {
        echo "Report title: {$this->getTitle()}\n";
        echo "Report generated at: {$this->getGenerationTimeStamp()}\n"; 
        echo "Report description: {$this->getReportDescription()}\n"; 
        echo "Report parameters:\n{$this->getParameterString()}\n\n"; 
        echo "Report result:\n{$this->getReportResultString()}\n";
    }

    public function __construct()
    {
        date_default_timezone_set('America/Chicago');
        $this->generation_time_stamp = date(DATE_RFC2822);
    }

}
?>