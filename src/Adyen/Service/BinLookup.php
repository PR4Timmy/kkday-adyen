<?php

namespace Kkday\Adyen\Service;

class BinLookup extends \Kkday\Adyen\Service
{
	/**
	 * @var ResourceModel\BinLookup\Get3dsAvailability
	 */
	protected $get3dsAvailability;

	/**
	 * BinLookup constructor.
	 *
	 * @param \Kkday\Adyen\Client $client
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct(\Kkday\Adyen\Client $client)
	{
		parent::__construct($client);
		$this->get3dsAvailability = new \Kkday\Adyen\Service\ResourceModel\BinLookup\Get3dsAvailability($this);
	}


	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function get3dsAvailability($params)
	{
		$result = $this->get3dsAvailability->request($params);
		return $result;
	}
}
