<?php

abstract class Goods {
    public static $price;
    public static $income;
    abstract function calculateFinalPrice($something);
    abstract function calculateIncome();

}

class OriginGood extends Goods {
    public static $income = 0;
    public static $price = 0;

    function setPrice($price) {
        OriginGood::$price = $price;
    }
    function getPrice() {
        return OriginGood::$price;
    }
    function calculateFinalPrice($something = 0) {
        return OriginGood::$price;
    }
    function plusIncome() {
        OriginGood::$income += OriginGood::$price;
    }
    function calculateIncome() {
        return OriginGood::$income;
    }
}

class DigitalGood extends OriginGood {
    public static $price = 0;
    public static $income = 0;
    function __construct(){
        $this->calculateFinalPrice();
    }
    function calculateFinalPrice($something = 0) {
       return parent::calculateFinalPrice()/2;
    }
    function plusIncome() {
        DigitalGood::$income += DigitalGood::$price;
    }
    function calculateIncome() {
        return DigitalGood::$income;
    }
}

class WeightyGood extends Goods {
    public static $price = 0;
    public static $income = 0;
    function setPrice($price) {
        WeightyGood::$price = $price;
    }
    function calculateFinalPrice($weight) {
    return WeightyGood::$price * ($weight / 1000);
    }
    function plusIncome() {
        WeightyGood::$income += WeightyGood::$price;
    }
    function calculateIncome() {
       return WeightyGood::$income;
    }
}