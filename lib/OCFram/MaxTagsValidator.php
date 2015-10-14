<?php
namespace OCFram;

class MaxTagsValidator extends Validator
{
    protected $maxLength;

    public function __construct($errorMessage, $maxLength)
    {
        parent::__construct($errorMessage);

        $this->setMaxLength($maxLength);
    }

    public function isValid($value)
    {
        return count($value) <= $this->maxLength;
    }

    public function setMaxLength($maxLength)
    {
        $maxLength = (int)$maxLength;

        if ($maxLength > 0)
        {
            $this->maxLength = $maxLength;
        }

        else
        {
            throw new \RuntimeException('La longueur maximale doit �tre un nombre sup�rieur � 0');
        }
    }
}