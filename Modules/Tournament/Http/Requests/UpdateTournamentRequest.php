<?php

namespace Modules\Tournament\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateTournamentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:tournaments,title,'.$this->tournament,
            'description' => ['required'],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
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
        return Gate::allows('edit_tournaments');
    }
}
