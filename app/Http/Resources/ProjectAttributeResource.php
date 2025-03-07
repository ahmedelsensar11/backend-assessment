<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectAttributeResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "type" => $this->type,
            "value" => $this->whenPivotLoaded('project_attribute_values', function () {
                return $this->pivot->value;
            })
        ];
    }
}
