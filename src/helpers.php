<?php
namespace BasicValidators;
function getValidators(): array
{
    return include "validators/config.php";
}