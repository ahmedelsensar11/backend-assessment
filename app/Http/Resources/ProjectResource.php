<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "status" => $this->status->value,
            "attributes" => ProjectAttributeResource::collection($this->projectAttributes),
        ];
    }
}
