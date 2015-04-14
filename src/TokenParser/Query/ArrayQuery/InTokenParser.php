<?php
namespace Mrix\Rql\Parser\TokenParser\Query\ArrayQuery;

use Mrix\Rql\Parser\TokenParser\Query\AbstractArrayOperatorTokenParser;
use Mrix\Rql\Parser\Node\Query\ArrayQuery\InNode;

/**
 */
class InTokenParser extends AbstractArrayOperatorTokenParser
{
    /**
     * @inheritdoc
     */
    protected function getOperatorName()
    {
        return 'in';
    }

    /**
     * @inheritdoc
     */
    protected function createNode($field, array $values)
    {
        return new InNode($field, $values);
    }
}
