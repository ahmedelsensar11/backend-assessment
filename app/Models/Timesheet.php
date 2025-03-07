<?php

namespace App\Models;

use App\Shared\src\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\QueryBuilder\AllowedFilter;

class Timesheet extends BaseModel
{
    use  HasFactory;
    protected $guarded = ['id'];

    /**
     * The user that belong to the timesheet.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The project that belong to the timesheet.
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function getAllowedFilters(): array  //for applying filters
    {
        return [
            AllowedFilter::exact('task_name'),
            AllowedFilter::exact('user.email'),
            AllowedFilter::exact('project.name'),
            AllowedFilter::callback('date', function ($query, $value) {
                if (is_array($value)) {
                    if (isset($value['from'])) {
                        $query->whereDate('date', '>=', $value['from']);
                    }
                    if (isset($value['to'])) {
                        $query->whereDate('date', '<=', $value['to']);
                    }
                } else {
                    $query->whereDate('date', $value);
                }
            }),
        ];
    }
}
