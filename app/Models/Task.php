<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // private static $tasks = [
    //     ['id' => 0, "name" => "Matematika", "description" => "lorem", "deadline" => "28-05-2024", "status" => "selesai"],
    //     ['id' => 1, "name" => "ipa", "description" => "ipsum", "deadline" => "29-05-2024","status" => "belum selesai"],
    //     ['id' => 2, "name" => "ips", "description" => "loro", "deadline" => "30-05-2024", "status" => "belum selesai"]
    // ];


    // public static function getAll(){
    //     return self::$tasks;
    // }

    // public static function getById($id)
    // {
    //     return self::$tasks[$id];
    // }

    protected $table = "task";

    protected $fillable = [
            "name",
            "description",
            "deadline",
            "status_id"
    ]; 

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
