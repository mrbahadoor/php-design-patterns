<?php

// Command (What you exec)
interface Command{
    public function execute();    
}

class GetCompanyCommand implements Command{
    private $stockSim;

    public function execute()
    {
        $this->stockSim->getCompany();
    }
}


class UpdatePricesCommand implements Command{
    private $stockSim;

    public function execute()
    {
        $this->stockSim->updatePrices();
    }
}

// Receiver
class StockSim{
    public function getCompany(){
        // ..
    }

    public function updatePrices(){

    }
}

// Client
// in == string
$in = 'Update';//getAction();


// Invoker
if($in == 'Update'){
    $comm = new UpdatePricesCommand();
    $comm->execute();
}

