<?php

namespace App\Enum\Order;

enum OrderStatus:string{
    case Success="success";
    case Pending="pending";
    case Failed="failed";
}
