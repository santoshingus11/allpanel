<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CustomRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($attribute === 'password') {
            // Check for minimum length and regex pattern
            if (strlen($value) < 8 || strlen($value) > 15 || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]+$/', $value)) {
                return false;
            }
        }
        
        if ($attribute === 'new_password') {
            // Check for minimum length and regex pattern
            if (strlen($value) < 8 || strlen($value) > 15 || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]+$/', $value)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return [
           
            'password.regex' => 'The password must contain at least: 1 uppercase letter,1 Special character, 1 lowercase letter and 1 number and 8 to 15 charecter needed.',
            'password.min' => 'Password must be at least 8 characters long.',
            'new_password.regex' => 'The password must contain at least: 1 uppercase letter, ,1 Special character, 1 lowercase letter and 1 number and 8 to 15 charecter needed.',
            'new_password.min' => 'Password must be at least 8 characters long.',
            // Add more messages for specific conditions as needed
        ];
    }
    }

