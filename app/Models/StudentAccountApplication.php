<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\BelongsTo;

class StudentAccountApplication extends Model
{
    //
    protected $fillable = [
        'tid',
        'class_name',
        'status',
    ];
    
    public function items(): HasMany
    {
        return $this->hasMany(StudentAccountApplicationItem::class, 'application_id');
    }

        public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'tid', 'id');
    }
}
