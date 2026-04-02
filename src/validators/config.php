<?php
namespace BasicValidators\Validators;
return [
    'required' => \BasicValidators\Validators\RequireValidator::class,
    'unique' => \BasicValidators\Validators\UniqueValidator::class,
    'min' => \BasicValidators\Validators\MinValidator::class,
    'max' => \BasicValidators\Validators\MaxValidator::class,
    'numeric' => \BasicValidators\Validators\NumericValidator::class,
    'integer' => \BasicValidators\Validators\IntegerValidator::class,
];