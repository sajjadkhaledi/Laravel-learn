<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Validation\Rules\Password;
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
            // 'name' => ['required', new Uppercase],
            // 'description.*' => 'required',
            // 'description.first' => 'required',
            // 'email' => 'required|email|unique:users,email',
            // 'photos.profile' => 'required'
            // 'password' => ['required', 'confirmed', Password::min(8)->letters()]
            // 'password' => ['required', 'confirmed', Password::min(8)->mixedCase()]
            // 'password' => ['required', 'confirmed', Password::min(8)->numbers()]
            // 'password' => ['required', 'confirmed', Password::min(8)->symbols()]
            // 'password' => ['required', 'confirmed', Password::min(8)->uncompromised()]
            // 'password' => ['required', 'confirmed', Password::min(8)->uncompromised()->symbols()->letters()->mixedCase()]
            // 'user_id' => 'exists:users,id',
            // 'user_id' => 'exists:users,id',
            // 'user_id' => 'exists:users,id',
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
