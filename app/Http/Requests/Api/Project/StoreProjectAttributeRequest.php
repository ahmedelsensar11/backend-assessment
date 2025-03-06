<?php


namespace App\Http\Requests\Api\Project;

use App\Enums\AttributeTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use phpseclib3\File\ASN1\Maps\AttributeType;

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
            "name" => "required|string|max:255",
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
