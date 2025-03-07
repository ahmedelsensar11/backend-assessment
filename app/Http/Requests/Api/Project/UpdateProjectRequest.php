<?php


namespace App\Http\Requests\Api\Project;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            "status" => "sometimes|string|max:255",
            'attributes' => 'nullable|array',
            'attributes.*.attribute_id' => 'required|exists:project_attributes,id',
            'attributes.*.value' => 'required|string',
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
