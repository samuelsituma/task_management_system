<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeBase extends Model
{
    use HasFactory;

    public function knowledgebasecategory()
    {
        return $this->belongsTo(KnowledgeBaseCategories::class);
    }

}
