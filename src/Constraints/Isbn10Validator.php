<?php

namespace SLLH\IsoCodesValidator\Constraints;

use IsoCodes;
use SLLH\IsoCodesValidator\AbstractIsoCodesConstraintValidator;
use Symfony\Component\Validator\Constraint;

/**
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
class Isbn10Validator extends AbstractIsoCodesConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);

        if ($value && !IsoCodes\Isbn::validate($value, 10)) {
            $this->createViolation($constraint->message);
        }
    }
}
