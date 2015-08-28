<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Validator\Constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class MultiTitle extends Constraint
{
    public $message = 'You must add at least one title (Any language)';
    public $messageNotInstanceOf = 'You class is not an instance of MultiLanguageInterface ! Please implement it in your class.';

    public function validatedBy()
    {
        return get_class($this) . 'Validator';
    }

    /**
     * Returns whether the constraint can be put onto classes, properties or
     * both.
     *
     * This method should return one or more of the constants
     * Constraint::CLASS_CONSTRAINT and Constraint::PROPERTY_CONSTRAINT.
     *
     * @return string|array One or more constant values
     *
     * @api
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }

}