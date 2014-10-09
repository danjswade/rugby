<?php
/**
 * @Created by Dan Wade <dan@danwade-development.co.uk>
 * @Link http://www.danwade-development.co.uk
 * @Date: 12/09/14
 * @Time: 21:19
 */

namespace Rugby;

class Match 
{
    
    protected $venue;
    protected $team;
    protected $mDate;
    protected $opposition;
    
    public function setVenue(Venue $venue)
    {
        $this->venue = $venue;
    }
    
    public function getVenue()
    {
        return $this->venue;
    }
    
    public function setTeam(Team $team)
    {
        $this->team = $team;
    }
    
    public function getTeam()
    {
        return $this->team;
    }
    
    public function setDate($date)
    {
        $this->mDate = $date;
    }
    
    public function getDate()
    {
        return $this->mDate;
    }
    
    public function setOpposition(Club $oppo)
    {
        $this->opposition = $oppo;
    }
    
    public function getOpposition()
    {
        return $this->opposition;
    }
    
} 