<?php

namespace Modules\Tournament\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTournamentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:tournaments,title',
            'description' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'file' => 'nullable|mimes:pdf',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('create_tournaments');
    }
}
