<?php
/**
 * @Created by Dan Wade <dan@danwade-development.co.uk>
 * @Link http://www.danwade-development.co.uk
 * @Date: 12/09/14
 * @Time: 21:19
 */

namespace Rugby;
use Rugby\Team;


class Match 
{
    
    protected $venue = ;
    protected $selection = ;
    
    public function setVenue($venue)
    {
        $this->venue = $venue;
    }
    
    public function get Venue()
    {
        return $this->venue;
    }
    
} 