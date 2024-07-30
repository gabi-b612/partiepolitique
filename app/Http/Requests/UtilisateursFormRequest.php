<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UtilisateursFormRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'prenom' => 'required|string|max:255|min:5',
            'nom_postnom' => 'required|string|max:255|min:5',
            'sexe' => 'required|in:F,M',
            'naissance' => 'required|string|max:255',
            'province_origine' => 'required|string|max:255|min:5',
            'territoire_origine' => 'required|string|max:255|min:5',
            'etudes' => 'required|string|min:5',
            'adresse' => 'required|string|max:255|min:5',
            'telephone' => 'required|string|max:255|min:5',
            'email' => 'required|string|email|max:255|unique:utilisateurs',
            'mot_de_passe' => 'required|string|min:8|confirmed',
            'photo_profil' => 'required|image|max:2024',
        ];
    }
}
