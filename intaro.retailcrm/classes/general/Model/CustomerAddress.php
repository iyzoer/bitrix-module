<?php

IncludeModuleLangFile(__FILE__);

/**
 * Class CustomerAddress
 */
class CustomerAddress
{
    public $index;
    public $country;
    public $region;
    public $city;
    public $street;
    public $building;
    public $house;
    public $block;
    public $flat;
    public $floor;
    public $intercom_code;
    public $metro;
    public $notes;
    public $text;

    /**
     * @param $index
     * @return $this
     */
    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * @param $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @param $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @param $building
     * @return $this
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * @param $house
     * @return $this
     */
    public function setHouse($house)
    {
        $this->house = $house;

        return $this;
    }

    /**
     * @param $block
     * @return $this
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * @param $flat
     * @return $this
     */
    public function setFlat($flat)
    {
        $this->flat = $flat;

        return $this;
    }

    /**
     * @param $floor
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * @param $intercom_code
     * @return $this
     */
    public function setIntercomCode($intercom_code)
    {
        $this->intercom_code = $intercom_code;

        return $this;
    }

    /**
     * @param $metro
     * @return $this
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;

        return $this;
    }

    /**
     * @param $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @param $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @param $array
     * @param $key
     * @param null $default
     * @return mixed|null
     */
    protected function getValue($array, $key, $default = NULL)
    {
        return isset($array[$key]) && !empty($array[$key]) ?  $array[$key] : $default;
    }

    /**
     * @param $arrayData
     * @return $this
     */
    public function setData($arrayData)
    {
        $this->setText($this->getValue($arrayData,'text'))
            ->setNotes($this->getValue($arrayData,'notes'))
            ->setBuilding($this->getValue($arrayData,'building'))
            ->setBlock($this->getValue($arrayData,'block'))
            ->setCity($this->getValue($arrayData,'city'))
            ->setFlat($this->getValue($arrayData,'flat'))
            ->setHouse($this->getValue($arrayData,'house'))
            ->setFloor($this->getValue($arrayData,'floor'))
            ->setCountry($this->getValue($arrayData,'countryIso'))
            ->setIndex($this->getValue($arrayData,'index'))
            ->setIntercomCode($this->getValue($arrayData,'intercomCode'))
            ->setMetro($this->getValue($arrayData,'metro'))
            ->setRegion($this->getValue($arrayData,'region'))
            ->setStreet($this->getValue($arrayData,'street'));

        return $this;
    }
}