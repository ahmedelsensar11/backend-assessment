<?php

namespace App\Http\Requests\Api\Timesheet;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTimesheetRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "task_name" => "sometimes|string|max:255",
            "date" => "sometimes|date|date_format:Y-m-d",
            "hours" => "sometimes|date_format:H:i:s",
            "user_id" => "sometimes|integer|exists:users,id",
            "project_id" => "sometimes|integer|exists:projects,id",
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
