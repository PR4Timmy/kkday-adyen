<?php

namespace Kkday\Adyen\Service\ResourceModel\Account;

class DeleteBankAccounts extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * DeleteBankAccounts constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/' . $service->getClient()->getApiAccountVersion() . '/deleteBankAccounts';
        parent::__construct($service, $this->endpoint);
    }
}
