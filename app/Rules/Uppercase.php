<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the first letter of the value is uppercase
        if (empty($value) || strtoupper($value[0]) !== $value[0]) {
            $fail('The title does not start with an uppercased letter');
        }
    }
}
