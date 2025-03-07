<?php


namespace App\Http\Requests\Api\Project;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserProjectRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "user_id" => "required|integer|exists:users,id",
            "project_id" => [
                "required",
                "integer",
                "exists:projects,id",
                Rule::unique('user_project', 'project_id')
                    ->where('user_id', $this->user_id)
                    ->ignore($this->id ?? null)
            ],
        ];
    }

    public function messages()
    {
        return [
            'unique' => 'This user is already assigned to this project.',
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
