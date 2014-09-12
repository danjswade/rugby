<?php
/**
 * @Created by Dan Wade <dan@danwade-development.co.uk>
 * @Link http://www.danwade-development.co.uk
 * @Date: 12/09/14
 * @Time: 21:20
 */

namespace Rugby;


class Players {

    protected $name;
    protected $dob;
    protected $position;

    function $Player_set($name, $dob, $position){
        $this->name = $name;
        $this->dob = $dob;
        $this->position = $position;
    }

}

?>