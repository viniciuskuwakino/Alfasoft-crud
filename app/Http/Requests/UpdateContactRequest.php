<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateContactRequest extends FormRequest
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

        $contactId = $this->route('id');

        return [
            'name' => ['required', 'string', 'min:5'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(Contact::class)->ignore($contactId)],
            'contact' => ['required', 'numeric', 'digits:9', Rule::unique(Contact::class)->ignore($contactId)],
        ];
    }
}
