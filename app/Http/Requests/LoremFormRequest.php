<?php

namespace P3\Http\Requests;

use P3\Http\Requests\Request;

class LoremFormRequest extends Request
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
            'paragraph' => 'required|integer|between:1,10'
        ];
    }
}
