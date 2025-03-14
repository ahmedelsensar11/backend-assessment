<?php

namespace App\Models;

use App\Enums\StatusEnum;
use App\Shared\src\Models\BaseModel;
use App\Traits\HasAttributeFilters;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\QueryBuilder\AllowedFilter;

class Project extends BaseModel
{
    use  HasFactory, HasAttributeFilters;
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
        return $this->belongsToMany(ProjectAttribute::class, 'project_attribute_values','entity_id','attribute_id')
            ->withPivot('value')
            ->withTimestamps();
    }

    public function attributeValues(): HasMany
    {
        return $this->hasMany(ProjectAttributeValue::class, 'entity_id');
    }


    public function getAllowedFilters(): array  //for applying filters
    {
        $regularFilters = [
            AllowedFilter::exact('name'),
            AllowedFilter::exact('status'),
            // basic Search for project's name
            AllowedFilter::callback('search', function ($query, $value) {
                $query->where(function ($query) use ($value) {
                    $value = strtolower($value); //to make it non-sensitive
                    $query->whereRaw('LOWER(name) LIKE ?', ["%{$value}%"]);
                });
            }),
        ];

        return array_merge($regularFilters, $this->getAttributeFilters());
    }
}
