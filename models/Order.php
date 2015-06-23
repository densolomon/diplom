<?php

class Order {
    public $id_order;
    public $id_client;
    public $shipping_address;
    public $sum;
    public $status;
    public $date;

    public function __construct($id_order="NULL", $id_client="NULL", $shipping_address="NULL",
                                $sum="NULL", $status="NULL", $date="NULL"

    ){
        $this->id_order         = ($id_order        =="NULL") ? $this->id_order         : $id_order;
        $this->id_client        = ($id_client       =="NULL") ? $this->id_order         : $id_order;
        $this->shipping_address = ($shipping_address=="NULL") ? $this->shipping_address : $shipping_address;
        $this->sum              = ($sum             =="NULL") ? $this->sum              : $sum;
        $this->status           = ($status          =="NULL") ? $this->status           : $status;
        $this->date             = ($date            =="NULL") ? $this->date             : $date;
    }
}