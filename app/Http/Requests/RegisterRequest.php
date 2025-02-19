<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'topic' => 'required',
            'msg' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'topic.required' => 'El topic es obligatorio',
            'msg.required' => 'El msg es obligatorio',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        if ($errors->has('topic')) {
            $response = response()->json([
                'error' => $errors->first('topic')
            ], 400, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }

        if ($errors->has('msg')) {
            $response = response()->json([
                'error' => $errors->first('msg')
            ], 400, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }

        throw new HttpResponseException($response);
    }
}