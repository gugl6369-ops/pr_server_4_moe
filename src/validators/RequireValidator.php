<?php

namespace BasicValidators\Validators;

use BasicValidators\Validator\AbstractValidator;

class RequireValidator extends AbstractValidator
{
    protected string $message = 'FПоле :field обязательно';

    public function rule(): bool
    {
        return !empty($this->value);
    }
}
