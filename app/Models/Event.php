<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function get_events() {
        $events = DB::table('event')->select('id','name')->get();
        return $events;
    }
}
