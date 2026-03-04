<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category; 

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'category_id'
    ];

    public function index(Request $request)
    {
        $query = Task::with('category');

        if ($request->status) {
            $query->where('status', $request->status);
        }

        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        return response()->json($query->get());
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}