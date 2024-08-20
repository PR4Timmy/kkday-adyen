<?php

namespace Kkday\Adyen\Service\ResourceModel\Account;

class CloseAccountHolder extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * CloseAccountHolder constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/' . $service->getClient()->getApiAccountVersion() . '/closeAccountHolder';
        parent::__construct($service, $this->endpoint);
    }
}
