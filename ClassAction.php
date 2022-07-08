<?php

require("CalcFactor.php");

class Action
{
    /**
     * @var array $currency_range Should contain a range currency
    */
    protected $currency_range = [
        [
            "value" =>  0.01,
            "description"   => "CHEAP"
        ],
        [
            "value" =>  10,
            "description"   => "GOOD_VALUE"
        ],
        [
            "value" =>  20,
            "description"   => "EXPENSIVE"
        ]
    ];

    /**
     * @param CalcFactor $calcFactor This is used to set the returned description
     * return Array ["calc_factor","vlr_type"]
     */
    public function doSomething(CalcFactor $calcFactor){
        return 
        [
            "calc_factor" => $calcFactor->getCalcFactor(),
            "vlr_type" => array_map("self::getCurrencyRangeDescription", $calcFactor->getValue2())
        ];
    }
    
    /**
     * @param array $data This is used to set the returned description
     */
    public function getCurrencyRangeDescription(array $data): string{
        $return = "FREE";
        foreach ($this->currency_range as $range) {
            if( $data['vlr'] > $range["value"]) {
                $return =  $range["description"];
            }
        }
        return $return;
    }

}
