<?php
/**
 * @Created by Dan Wade <dan@danwade-development.co.uk>
 * @Link http://www.danwade-development.co.uk
 * @Date: 12/09/14
 * @Time: 21:20
 */

namespace Rugby;


class Player
{

    protected $name;
    protected $dob;
    protected $position;
    const POSITION_LOOSE = 'Loose';
    const POSITION_HOOKER = 'Hooker';
    const POSITION_TIGHT = 'Tight';
    const POSITION_LEFTLOCK = 'Leftlock';
    const POSITION_RIGHTLOCK = 'Rightlock';
    const POSITION_BLIND = 'Blind';
    const POSITION_OPEN = 'Open';
    const POSITION_EIGHT = 'Eight';
    const POSITION_SCRUMHALF = 'Scrumhalf';
    const POSITION_FLYHALF = 'Flyhalf';
    const POSITION_LWING = 'Lwing';
    const POSITION_INSIDE = 'Inside';
    const POSITION_OUTSIDE = 'Outside';
    const POSITION_RWING = 'Rwing';
    const POSITION_FULLBACK = 'Fullback';
    const POSITION_SUB1 = 'Sub1';
    const POSITION_SUB2 = 'Sub2';
    const POSITION_SUB3 = 'Sub3';
    const POSITION_SUB4 = 'Sub4';
    const POSITION_SUB5 = 'Sub5';

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        //checks position is valid before setting
        if(!self::validPosition($position)){
            throw new\RuntimeException('Invalid Position: '.$position);
        }
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Checks position is one that matches constant and not random word/position
     */
    public static function validPosition($position)
    {
        return defined('self::POSITION_'.strtoupper($position));
    }
    
    /**
     * Creates an array from variables ready for handling
     */
    public function getArrayCopy()
    {
        return (
            'name' => $this->name;
            'dob' => $this->dob;
            'position' => $this->position;
        );
    }
    
    /**
     * Takes a given array to set the variables
     */
    public function exchangeArray (array $data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->dob = isset($data['dob']) ? $data['dob'] : null;
        $this->position = isset($data['position']) ? $data['position'] : null;
    }

}