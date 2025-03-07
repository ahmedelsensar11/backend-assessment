<?php

namespace App\Models;

use App\Shared\src\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\QueryBuilder\AllowedFilter;

class UserProject extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'user_project';

    /**
     * The user that belong to the userProject.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The project that belong to the userProject.
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }


    public function getAllowedFilters(): array  //for applying filters
    {
        return [
            AllowedFilter::exact('user.email'),
            AllowedFilter::exact('project.name'),
        ];
    }
}
