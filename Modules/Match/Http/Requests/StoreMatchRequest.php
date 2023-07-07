<?php

namespace Modules\Match\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMatchRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' =>'required',
            'date' =>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
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
