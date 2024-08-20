<?php

namespace Kkday\Adyen\Service;

class CheckoutUtility extends \Kkday\Adyen\ApiKeyAuthenticatedService
{
	/**
	 * @var ResourceModel\CheckoutUtility\OriginKeys
	 */
	protected $originKeys;

	/**
	 * CheckoutUtility constructor.
	 *
	 * @param \Kkday\Adyen\Client $client
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct(\Kkday\Adyen\Client $client)
	{
		parent::__construct($client);
		$this->originKeys = new \Kkday\Adyen\Service\ResourceModel\CheckoutUtility\OriginKeys($this);
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function originKeys($params)
	{
		$result = $this->originKeys->request($params);
		return $result;
	}
}
