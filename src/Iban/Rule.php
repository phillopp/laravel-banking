<?php
 
namespace Phillopp\LaravelBanking\Iban;
 
use Iban\Validation\Validator;
use Illuminate\Contracts\Validation\InvokableRule;
use Iban\Validation\Iban as IbanObject;
 
class Rule implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
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