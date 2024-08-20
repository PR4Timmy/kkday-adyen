<?php

namespace Kkday\Adyen\Service\ResourceModel\Account;

class CreateAccountHolder extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * CreateAccountHolder constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/' . $service->getClient()->getApiAccountVersion() . '/createAccountHolder';
        parent::__construct($service, $this->endpoint);
    }
}
