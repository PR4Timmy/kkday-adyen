<?php

namespace Kkday\Adyen\Service\ResourceModel\Fund;

class SetupBeneficiary extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * SetupBeneficiary constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointFund') . '/' . $service->getClient()->getApiFundVersion() . '/setupBeneficiary';
        parent::__construct($service, $this->endpoint);
    }
}
