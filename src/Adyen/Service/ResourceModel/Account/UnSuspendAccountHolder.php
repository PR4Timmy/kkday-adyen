<?php

namespace Kkday\Adyen\Service\ResourceModel\Account;

class UnSuspendAccountHolder extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * UnSuspendAccountHolder constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/' . $service->getClient()->getApiAccountVersion() . '/unSuspendAccountHolder';
        parent::__construct($service, $this->endpoint);
    }
}
