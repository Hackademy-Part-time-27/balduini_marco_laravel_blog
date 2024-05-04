<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function passwordRules($confirmed = true): array
    {
        $password = new Password(5);

        $password-> mixedCase()->letters()->numbers()->symbols();

        if($confirmed) {
            $confirmedValidation = 'confirmed';
        } else {
            $confirmedValidation = null;
        }
        
        return ['required', 'string', $password, $confirmedValidation];
    }
}
