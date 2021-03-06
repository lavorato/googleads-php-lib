<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLineItemCreativeAssociationsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociationPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociationPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociationPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\LineItemCreativeAssociationPage $rval
     * @return \Google\AdsApi\Dfp\v201711\getLineItemCreativeAssociationsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
