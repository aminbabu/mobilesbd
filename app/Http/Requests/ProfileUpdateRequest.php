<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rules\File;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class ProfileUpdateRequest extends FormRequest
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $table = 'admins';

        if ($this->user->role->name === 'user') {
            $table = 'users';
        }

        return [
            'name' => ['string', 'max:255'],
            'username' => ['nullable', 'string', 'min:6', 'max:255', 'unique:' . $table],
            'email' => [
                'email',
                'max:255', 'unique:' . $table . ',email,' . $this->user->id,
            ],
            'password' => [Rules\Password::defaults()],
            'avatar' => [File::image()->min(10)->max(512)->dimensions(Rule::dimensions()->maxWidth(512)->maxHeight(512))],
            'phone' => ['phone', 'max:25'],
            'phone_country' => ['nullable', 'string', 'max:25'],
            'country' => ['nullable', 'string', 'max:255'],
            'address_line_1' => ['nullable', 'string', 'max:255'],
            'address_line_2' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'postcode' => ['nullable', 'string', 'max:25'],
            'status' => ['nullable', 'string', 'max:25'],
        ];
    }
}