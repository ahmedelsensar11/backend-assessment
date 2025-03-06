<?php

namespace App\Models;

use App\Shared\src\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectAttributeValue extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];


    /**
     * The project that belongs to the attributeValue
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'entity_id','id');
    }

    /**
     * The attribute that belongs to the attributeValue
     */
    public function attribute(): BelongsTo
    {
        return $this->belongsTo(ProjectAttribute::class, 'attribute_id','id');
    }
}
