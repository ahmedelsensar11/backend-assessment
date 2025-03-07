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
        return $this->belongsToMany(ProjectAttribute::class, 'project_attribute_values','entity_id','attribute_id')
            ->withPivot('value')
            ->withTimestamps();
    }

    public function attributeValues()
    {
        return $this->hasMany(ProjectAttributeValue::class, 'entity_id');
    }


    public function getAllowedFilters(): array  //for applying filters
    {
        $baseFilters = [
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

            // Get all project attributes
            $attributeFilters = ProjectAttribute::get()->map(function ($attribute) {
                return AllowedFilter::callback("{$attribute->name}", function ($query, $value) use ($attribute) {
                    $query->whereHas('attributeValues', function ($query) use ($attribute, $value) {
                        $query->where('attribute_id', $attribute->id)
                            ->where('value', 'like', "%{$value}%");
                    });
                });
            })->toArray();

        return array_merge($baseFilters, $attributeFilters);
    }
}
