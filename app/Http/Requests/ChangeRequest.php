<?php

namespace App\Http\Requests;
use App\Rules\CurrentPassword;

use Illuminate\Foundation\Http\FormRequest;

class ChangeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'currentpassword' => ['required','min:8', new CurrentPassword()],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
