<?php
class Car {
    //private
    private $model;
    public function getModel()
    {
        return "The car model is " . $this->model;
    }

    //perbaikan 'menambahkan fungsi setter untuk mengakses Property dengan Visibility Private'
    public function setModel($model){
        $this->model = $model;
    }
}

$mercedes = new Car();

////akses property dari luar class.

// $mercedes->model = "Mercedes benz";

//perbaikan
$mercedes->setModel("Mercedes benz");

echo $mercedes->getModel();