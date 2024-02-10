<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
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
            'role' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'id' => 'required',
            'password' => 'required'
            // 'parent_name' => 'required',
            // 'address' => 'required',
            // 'sex' => 'required',
            // 'contact_number' => 'required',
            // 'date_of_birth' => 'required',
            // 'year' => 'required',
            // 'block' => 'required',
            // 'course' => 'required'
        ];
    }

    public function messages(): array
{
    return [
        'role.required' => 'Please select a role',
        'fname.required' => 'The firstname is required',
        'lname.required' => 'The lastname is required',
        'id.required' => 'The id number field is required.',
        'password.required' => 'The password field is required.'
    ];
}

}
