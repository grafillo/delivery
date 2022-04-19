<?php


class Company
{
    private $sourceKladr;
    private $targetKladr;
    private $weight;


    public function __construct($sourceKladr,$targetKladr,$weight)
    {
        $this->sourceKladr = $sourceKladr;
        $this->targetKladr = $targetKladr;
        $this->weight = $weight;
    }

    public function fastCompany(){

        $price = $this->weight*1.4;
        $period = '21 day';
        $result = ['fastCompany'=>['price'=>$price,'period'=>$period,'error'=>'']];
        return  $result;

    }

    public function slowCompany(){

        $coefficient = $this->weight*1.2;
        $date = '2022-08-23';
        $result = ['slowCompany'=>['coefficient'=>$coefficient,'date'=>$date,'error'=>'']];
        return  $result;
    }

    public function firstCompany(){

        $price = $this->weight*1.8;
        $date = '2022-06-23';
        $result = ['firstCompany'=>['price'=>$price,'date'=>$date,'error'=>'']];
        return  $result;
    }

    public function secondCompany(){

        $price = $this->weight*2;
        $date = '2022-06-24';
        $result = ['secondCompany'=>['price'=>$price,'date'=>$date,'error'=>'']];
        return  $result;
    }

    public function thirdCompany(){

        $price = $this->weight*3;
        $date = '2022-09-23';
        $result = ['thirdCompany'=>['price'=>$price,'date'=>$date,'error'=>'']];
        return  $result;
    }
}