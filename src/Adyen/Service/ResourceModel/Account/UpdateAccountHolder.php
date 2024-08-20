<?php

namespace Kkday\Adyen\Service\ResourceModel\Account;

class UpdateAccountHolder extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * UpdateAccountHolder constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/' . $service->getClient()->getApiAccountVersion() . '/updateAccountHolder';
        parent::__construct($service, $this->endpoint);
    }
}
