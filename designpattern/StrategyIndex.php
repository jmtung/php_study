<?php
require_once "../vendor/autoload.php";

class StrategyIndex{

    protected $strategy;

    public function index(){
        $this->strategy->showAd();
        echo "<br/>";
        $this->strategy->showCategory();
    }

    public function setStrategy(\DesignPattern\Interfaces\UserStrategy $strategy)
    {
        $this->strategy=$strategy;
    }

}

$index=new StrategyIndex();
if (isset($_GET['female'])){
    $strategy=new \DesignPattern\FemaleUserStrategy();
}else{
    $strategy=new \DesignPattern\MaleUserStrategy();
}

$index->setStrategy($strategy);
$index->index();