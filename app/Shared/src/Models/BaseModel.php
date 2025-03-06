<?php
namespace App\Shared\src\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    protected array $allowedFilters = ['id','name'];

    public function getAllowedFilters(): array
    {
        return $this->allowedFilters ;
    }
}
