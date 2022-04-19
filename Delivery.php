<?php
require_once __DIR__.'/Company.php';



class Delivery{

    private $Companies;
    public $arrayCompany;

    public function __construct($sourceKladr,$targetKladr,$weight)
    {
       $this->Companies = new Company($sourceKladr,$targetKladr,$weight);


        $firstCompany = $this->Companies->firstCompany();
        $secondCompany = $this->Companies->secondCompany();
        $thirdCompany = $this->Companies->thirdCompany();

        if($_POST['delivery']=='fast'){
            $company = $this->Companies->fastCompany();
        }
        if($_POST['delivery']=='slow'){
            $company = $this->Companies->slowCompany();
        }

        $arrayCompany = [
            $firstCompany,
            $secondCompany,
            $thirdCompany,
            $company
        ];

        return $this->arrayCompany = json_encode($arrayCompany);

    }


}

