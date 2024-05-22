<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Role;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'phone' => ['nullable', 'string'], // Champ optionnel
            'address' => ['nullable', 'string'], // Champ optionnel
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
           
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'password' => Hash::make($input['password']), //pour hasher le mot de passe avant de le stocker dans la base de données
            'role_id' => 3, // 3 représente l'ID du rôle 'User' dans votre table 'roles'
        ]);
    }
}
