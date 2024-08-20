<?php

namespace Kkday\Adyen\Service;

class DirectoryLookup extends \Kkday\Adyen\Service
{
	/**
	 * @var ResourceModel\DirectoryLookup\Directory
	 */
	protected $directoryLookup;

	/**
	 * DirectoryLookup constructor.
	 *
	 * @param \Kkday\Adyen\Client $client
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct(\Kkday\Adyen\Client $client)
	{
		parent::__construct($client);
		$this->directoryLookup = new \Kkday\Adyen\Service\ResourceModel\DirectoryLookup\Directory($this);
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function directoryLookup($params)
	{
		$result = $this->directoryLookup->requestPost($params);
		return $result;
	}
}
