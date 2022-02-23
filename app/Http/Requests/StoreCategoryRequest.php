<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{

    // protected $redirect = '/dashboard';
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
        // dd(request()->all());
        return [
            'name' => 'required',
            'description' => 'required',
            'hassan' => 'required',
            'email' => 'required|email|unique:users,email',
            'user_id' => 'exists:users,id',
            'user_id' => 'exists:users,id',
            'user_id' => 'exists:users,id',
        ];
    }

    public function messages()
    {
        return [
        'name.required' => 'توروخدا پرش کن',
        ];
    }

    public function attributes(){
        return [
            'email' => 'ادرس ایمیل'
        ];
    }
}
