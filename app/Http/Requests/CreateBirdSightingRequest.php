<?php

namespace App\Http\Requests;

use App\Rules\BirdSightingRules;
use Illuminate\Foundation\Http\FormRequest;

class CreateBirdSightingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return array_merge(
            BirdSightingRules::birdRules(),
            BirdSightingRules::locationRules()
        );
    }

    public function messages()
    {
        return [
            'common_name.required' => 'A common name for the bird you saw is required',
            'sighted_at.required' => 'An approximate date and time for the sighting is required',
        ];
    }
}
