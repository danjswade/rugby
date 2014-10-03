<?php
/**
 * @Created by Dan Wade <dan@danwade-development.co.uk>
 * @Link http://www.danwade-development.co.uk
 * @Date: 12/09/14
 * @Time: 21:18
 */

namespace Rugby;


class Team
{

    protected $name;

    protected $selection = array(
        "loose" => "",
        "hooker" => "",
        "tight" => "",
        "leftlock" => "",
        "rightlock" => "",
        "blindside" => "",
        "openside" => "",
        "eight" => "",
        "scrumhalf" => "",
        "flyhalf" => "",
        "lwing" => "",
        "inside" => "",
        "outside" => "",
        "rwing" => "",
        "fullback" => "",
        "sub1" => "",
        "sub2" => "",
        "sub3" => "",
        "sub4" => "",
        "sub5" => ""
    );

    public function selection ($data)
    {
        
        $result = array_merge($this->selection,$data);
        return $result;
        
    }

    public function setName ($name)
    {
        $this->name = $name;
    }
    
    public function getName ()
    {
        return $this->name;
    }

} 