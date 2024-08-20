<?php

namespace Kkday\Adyen\Service;

class PosPayment extends \Kkday\Adyen\ApiKeyAuthenticatedService
{
	/**
	 * @var ResourceModel\Payment\TerminalCloudAPI
	 */
	protected $runTenderSync;

	/**
	 * @var ResourceModel\Payment\TerminalCloudAPI
	 */
	protected $runTenderAsync;

    /**
     * @var
     */
	protected $txType;

    /**
     * @var ResourceModel\Payment\ConnectedTerminals
     */
	protected $connectedTerminals;

	/**
	 * PosPayment constructor.
	 *
	 * @param \Kkday\Adyen\Client $client
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct(\Kkday\Adyen\Client $client)
	{
		parent::__construct($client);
		$this->runTenderSync = new \Kkday\Adyen\Service\ResourceModel\Payment\TerminalCloudAPI($this, false);
		$this->runTenderAsync = new \Kkday\Adyen\Service\ResourceModel\Payment\TerminalCloudAPI($this, true);
	    $this->connectedTerminals = new \Kkday\Adyen\Service\ResourceModel\Payment\ConnectedTerminals($this);
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function runTenderSync($params)
	{
		$result = $this->runTenderSync->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function runTenderAsync($params)
	{
		$result = $this->runTenderAsync->request($params);
		return $result;
	}

	/**
	 * @param $request
	 * @return null
	 */
	public function getServiceId($request)
	{
		if (isset($request['SaleToPOIRequest']['MessageHeader']['ServiceID'])) {
			return $request['SaleToPOIRequest']['MessageHeader']['ServiceID'];
		}
		return null;
	}

    /**
     * @param $params
     * @return mixed
     * @throws \Kkday\Adyen\AdyenException
     */
	public function getConnectedTerminals($params)
    {
        $result = $this->connectedTerminals->request($params);
        return $result;
    }
}
