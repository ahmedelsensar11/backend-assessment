<?php


namespace App\Http\Requests\Api\Project;

use App\Enums\AttributeTypeEnum;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectAttributeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|string|max:255||unique:project_attributes,name",
            "type" => "required|string|max:255|in:" . implode(',' , AttributeTypeEnum::values()),
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
