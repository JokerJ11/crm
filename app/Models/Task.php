<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'ref_no', 'description', 'attachment'
     ];


    // public function get_task_number()
    // {
    //     return '#' . str_pad($this->id, 8, "0", STR_PAD_LEFT);
    // }

    public function generateOrderNR()
    {
        $orderObj = \DB::table('tasks')->select('ref_no')->latest('id')->first();
        if ($orderObj) {
            $orderNr = $orderObj->ref_no;
            $removed1char = substr($orderNr, 1);
            $generateOrder_nr = $stpad = str_pad($removed1char + 1, 8, "0", STR_PAD_LEFT);
        } else {
            $generateOrder_nr = str_pad(1, 8, "0", STR_PAD_LEFT);
        }
        return $generateOrder_nr;
    }

    public function type() {
        return $this->belongsTo(State::class, 'type_of_work_id');
    }

    public function updateProgress(){      
        $sum=0;
        if(count((array)$this->columns)){
            for ($i = 0; $i < count($this->columns); $i++) {
                $list = $this->columns[$i];
                if($list->progress==null){
                    $list->progress=0;
                }
                $sum+=$list->progress;
            }
            $progress=$sum/count($this->columns);
            $this->progress=round($progress);
        }
        return $this->progress;
    }
}
