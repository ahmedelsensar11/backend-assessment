<?php

namespace App\Http\Requests\Api\Timesheet;

use Illuminate\Foundation\Http\FormRequest;

class StoreTimesheetRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "task_name" => "required|string|max:255",
            "date" => "required|date|date_format:Y-m-d",
            "hours" => "required|date_format:H:i:s",
            "user_id" => "required|integer|exists:users,id",
            "project_id" => "required|integer|exists:projects,id",
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
