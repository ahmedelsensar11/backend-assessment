<?php


namespace App\Http\Requests\Api\Project;

use App\Enums\AttributeTypeEnum;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectAttributeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "sometimes|string|max:255",
            "type" => "sometimes|string|max:255|in:" . implode(',' , AttributeTypeEnum::values()),
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
