<?php

namespace App\Models;

use App\Enums\StatusEnum;
use App\Shared\src\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\QueryBuilder\AllowedFilter;

class Project extends BaseModel
{
    use  HasFactory;
    protected $fillable = [
        'name',
        'status',
    ];
    protected function casts(): array
    {
        return [
            'status' => StatusEnum::class,
        ];
    }


    /**
     * The users that belong to the project.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }


    /**
     * The attributes that belong to the project.
     */
    public function projectAttributes(): BelongsToMany
    {
        return $this->belongsToMany(ProjectAttribute::class, 'project_attribute_values', 'entity_id','attribute_id');
    }

    public function getAllowedFilters(): array  //for applying filters
    {
        return [
            AllowedFilter::exact('name'),
            AllowedFilter::exact('status'),

            // Search
            AllowedFilter::callback('search', function ($query, $value) {
                $query->where(function ($query) use ($value) {
                    $value = strtolower($value); //to make it non-sensitive
                    $query->whereRaw('LOWER(name) LIKE ?', ["%{$value}%"]);
                });
            }),
        ];
    }
}
