<?php

interface SortStrategy{
    public function sort();
}


class QuickSort{
    private $data;

    public function __construct(Array $data)
    {   
        $this->data = $data;
    }

    public function sort(){
        // 
    }
}

class MergeSort{
    private $data;

    public function __construct(Array $data)
    {   
        $this->data = $data;
    }

    public function sort(){
        // 
    }
}

$data = [33,56,785,66,88,86, 35, 63];

function sort2(Array &$data){
    if(count($data) > 20){
        return new QuickSort($data);
    }else{
        return new MergeSort($data);
    }
}

sort2($data);