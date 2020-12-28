<?php

namespace SolrSimilarSearch\Functions;
use SolrSimilarSearch\Interfaces\Stringable;

class Sum implements Stringable
{
    private $args;

    /**
     * @param $args
     */
    public function __construct($args)
    {
        $this->args = $args;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf('sum(%s)', implode(',', $this->args));
    }
}