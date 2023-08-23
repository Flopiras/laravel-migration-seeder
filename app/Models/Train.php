<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function stamp_departure_time()
    {
        $departure = strtotime($this->departure_time);
        return date("h:i", $departure);
    }

    public function stamp_arrival_time()
    {
        $arrival = strtotime($this->arrival_time);
        return date("h:i", $arrival);
    }
}
