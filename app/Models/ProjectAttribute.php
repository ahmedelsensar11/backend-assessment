<?php

namespace App\Models;

use App\Shared\src\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\QueryBuilder\AllowedFilter;

class ProjectAttribute extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];


    /**
     * The projects that belong to the attribute.
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_attribute_values','attribute_id','entity_id')
            ->withPivot('value')
            ->withTimestamps();
    }

    public function getAllowedFilters(): array  //for applying filters
    {
        return [
            AllowedFilter::exact('name'),
            AllowedFilter::exact('type'),
        ];
    }
}
