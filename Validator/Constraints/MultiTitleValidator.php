<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Tanna\ProductBundle\Model\MultiLanguageInterface;

class MultiTitleValidator extends ConstraintValidator
{

    /**
     * Checks if the passed value is valid.
     *
     * @param mixed $value The value that should be validated
     * @param Constraint $constraint The constraint for the validation
     *
     * @api
     */
    public function validate($class, Constraint $constraint)
    {
        if (!$class instanceof MultiLanguageInterface) {
            $this->context->buildViolation($constraint->messageNotInstanceOf)->addViolation();
        }

        if (empty($class->getNameFr()) && empty($class->getNameEn())) {
            $this->context->buildViolation($constraint->message)
                // ->setParameter('%string%', $value)
                ->addViolation();
        }
    }
}