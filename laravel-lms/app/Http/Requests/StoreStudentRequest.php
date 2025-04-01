<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        // this will allow all users to make this request
        // for now we will just return true
        // in the future, we will add authorization to this request
        // this will be used to check if the user is authorized to make this request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // the rules for the request
            // this will be used to validate the request
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email:rfc,dns'
            // rfc: check if the email is valid according to the RFC standard
            // dns: check if the email has a valid DNS record
            // this will check if the email is valid

            // reference: https://laravel.com/docs/11.x/validation#available-validation-rules

        ];
    }
}
