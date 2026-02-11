<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'firstname' => 'required|string|min:3|max:50',
            'lastname' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,user,director',
            'status' => 'required|string|in:active,inactive',
            'phone' => 'required|string|min:10|max:15',
            'address' => 'required|string|min:10|max:255',
            'city' => 'required|string|min:3|max:50',
            'district' => 'required|string|min:3|max:50',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'country' => 'required|string|min:3|max:50',
        ];
    }

    public function messages(): array {
        //french messages
        return [
            'firstname.required' => 'Le prénom est requis',
            'firstname.string' => 'Le prénom doit être une chaîne de caractères',
            'firstname.min' => 'Le prénom doit contenir au moins 3 caractères',
            'firstname.max' => 'Le prénom doit contenir au plus 50 caractères',
            'lastname.required' => 'Le nom est requis',
            'lastname.string' => 'Le nom doit être une chaîne de caractères',
            'lastname.min' => 'Le nom doit contenir au moins 3 caractères',
            'lastname.max' => 'Le nom doit contenir au plus 50 caractères',
            'email.required' => 'L\'email est requis',
            'email.email' => 'L\'email doit être une adresse email valide',
            'email.unique' => 'L\'email existe déjà',
            'password.required' => 'Le mot de passe est requis',
            'password.string' => 'Le mot de passe doit être une chaîne de caractères',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères',
            'role.required' => 'Le rôle est requis',
            'role.string' => 'Le rôle doit être une chaîne de caractères',
            'role.in' => 'Le rôle doit être admin, user ou director',
            'status.required' => 'Le statut est requis',
            'status.string' => 'Le statut doit être une chaîne de caractères',
            'status.in' => 'Le statut doit être active ou inactive',
            'phone.required' => 'Le téléphone est requis',
            'phone.string' => 'Le téléphone doit être une chaîne de caractères',
            'phone.min' => 'Le téléphone doit contenir au moins 10 caractères',
            'phone.max' => 'Le téléphone doit contenir au plus 15 caractères',
            'address.required' => 'L\'adresse est requis',
            'address.string' => 'L\'adresse doit être une chaîne de caractères',
            'address.min' => 'L\'adresse doit contenir au moins 10 caractères',
            'address.max' => 'L\'adresse doit contenir au plus 255 caractères',
            'city.required' => 'La ville est requis',
            'city.string' => 'La ville doit être une chaîne de caractères',
            'city.min' => 'La ville doit contenir au moins 3 caractères',
            'city.max' => 'La ville doit contenir au plus 50 caractères',
            'district.required' => 'Le district est requis',
            'district.string' => 'Le district doit être une chaîne de caractères',
            'district.min' => 'Le district doit contenir au moins 3 caractères',
            'district.max' => 'Le district doit contenir au plus 50 caractères',
            'profile_picture.required' => 'La photo de profil est requise',
            'profile_picture.image' => 'La photo de profil doit être une image',
            'profile_picture.mimes' => 'La photo de profil doit être une image de type jpeg, png, jpg, gif ou svg',
            'profile_picture.max' => 'La photo de profil doit contenir au plus 2048 ko',
            'country.required' => 'Le pays est requis',
            'country.string' => 'Le pays doit être une chaîne de caractères',
            'country.min' => 'Le pays doit contenir au moins 3 caractères',
            'country.max' => 'Le pays doit contenir au plus 50 caractères',
        ];
    }
}
