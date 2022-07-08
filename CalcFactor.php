<?php

class CalcFactor
{
    /**
     * @var float $param1 This is used in calc factor.
     */
    protected $value1;

    
    /**
     * @var array $param2 This is used in Currency Range.
     */
    protected $value2;

    
    /**
     *  @var float $param1 This is used in calc factor.
     */
    protected $value3;

    
    /**
     * @var float $param1 This is used in calc factor.
     */
    protected $value4;

    
    /**
     * @var float $param1 This is used in calc factor.
     */
    protected $value5;

    
    /**
     * @var float $param1 This is used in calc factor.
     */
    protected $value6;

    /**
     * @param float $param1 This is used in calc factor.
     * @param array $param2 This is used in Currency Range.
     * @param float $param3 This is used in calc factor.
     * @param float $param4 This is used in calc factor.
     * @param float $param5 This is used in calc factor.
     * @param float $param6 This is used in calc factor.
     */
    function _construct($value1,$value2,$value3,$value4,$value5,$value6){
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->value3 = $value3;
        $this->value4 = $value4;
        $this->value5 = $value5;
        $this->value6 = $value6;
    }
    
    /**
     * returns the factor calculation
     * return float
     */
    public function getCalcFactor(): float{
        return ($this->value1 + $this->value3 + $this->value4 + $this->value5) * $this->value6;
    }

    public function getValue2(): array{
        return $this->value2;
    }  
}