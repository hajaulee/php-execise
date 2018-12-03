<?php
/**
 * Created by PhpStorm.
 * User: hajaulee
 * Date: 09/10/2018
 * Time: 22:46
 */

class Page{
    private $page;
    private $title;
    private $year;
    public $copyright;


    function __construct($t, $y, $c)
    {
        $this->title = $t;
        $this->year = $y;
        $this->copyright = $c;
    }

    private function addHeader(){
            $this->page =  "<h2>" . $this->title . "</h2>";
    }

    public function addContent($content){
            $this->addHeader();
            $this->page .= "<p>$content</p>";
            $this->addFooter();
    }
    private function addFooter(){
            $this->page .= "<table><tr><td>$this->year</td><td>$this->copyright</td></tr></table>";
    }

    public function get(){
        return $this->page;
    }

}