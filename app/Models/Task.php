<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TodoList;

class Task extends Model
{
    use HasFactory;
 //zar ne bi trebalo da se zove todoList
    public function user(){
        return $this->belongsTo(TodoList::class);
    }
}
