<?php
 
namespace Phillopp\LaravelBanking\Iban;
 
use Closure;
use Iban\Validation\Validator;
use Iban\Validation\Iban as IbanObject;
use Illuminate\Contracts\Validation\ValidationRule;

class Rule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  Closure  $fail
     * @return void
     */
    public function validate($attribute, $value, $fail): void
    {
        $validator = new Validator();
        $iban = new IbanObject($value);

        if (!$validator->validate($iban)) {
            foreach ($validator->getViolations() as $violation) {
                $fail($violation);
            }
        }
    }
}