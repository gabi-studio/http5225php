<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // the true below is just to bypass the authorization check
    // this will allow all users to make this request
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
            // the rules for the request
            // this will be used to validate the request
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email'
            // email' => 'required|email:rfc,dns'
            // rfc: check if the email is valid according to the RFC standard
            // dns: check if the email has a valid DNS record
            // this will check if the email is valid

            // reference: https://laravel.com/docs/11.x/validation#available-validation-rules

        ];
    }
}
