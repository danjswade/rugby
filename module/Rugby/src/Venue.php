<?php
/**
 * @Created by Dan Wade <dan@danwade-development.co.uk>
 * @Link http://www.danwade-development.co.uk
 * @Date: 12/09/14
 * @Time: 21:19
 */

namespace Rugby;


class Venue {

    protected $address;
    protected $postCode;
    protected $map;
    protected $directions;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getDirections()
    {
        return $this->directions;
    }

    /**
     * @param mixed $directions
     * Takes a Google Maps link for directions from club to opposition if playing away
     */
    public function setDirections($directions)
    {
        $this->directions = self::verifyLink($directions);
    }

    /**
     * @return mixed
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param mixed $map
     * Takes a Google Maps link for location of match
     */
    public function setMap($map)
    {
        $this->map = self::verifyLink($map);
    }

    /**
     * @return mixed
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param mixed $postCode
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    //checks that link is a link, if not adds http://
    public function verifyLink ($link)
    {
        $map = substr($link,0,3);
        if($map != 'http') {
            $newLink = 'http://' . $link;
            return $newLink;
        }
    }

} 