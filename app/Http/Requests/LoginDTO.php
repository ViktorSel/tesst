<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class LoginDTO extends FormRequest
{
    public const ATTR_LOGIN = User::FIELD_LOGIN;
    public const ATTR_PASSWORD = User::FIELD_PASSWORD;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            self::ATTR_LOGIN    => ['required','min:1'],
            self::ATTR_PASSWORD => ['required','min:1'],
        ];
    }

    public function messages()
    {
        return [
            self::ATTR_LOGIN.'.required'    => 'Аттрибут '.self::ATTR_LOGIN.' обязателен',
            self::ATTR_LOGIN.'.min'    => 'Аттрибут '.self::ATTR_LOGIN.' должен быть не менее 1 символа',

            self::ATTR_PASSWORD.'.required'    => 'Аттрибут '.self::ATTR_PASSWORD.' обязателен',
            self::ATTR_PASSWORD.'.min'    => 'Аттрибут '.self::ATTR_PASSWORD.' должен быть не менее 1 символа',
        ];
    }
}
