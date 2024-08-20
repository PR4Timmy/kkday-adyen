<?php

namespace Kkday\Adyen\Service\ResourceModel\CheckoutUtility;

class OriginKeys extends \Kkday\Adyen\Service\AbstractCheckoutResource
{
	/**
	 * @var string
	 */
	protected $endpoint;

	/**
	 * OriginKeys constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct($service)
	{
		$this->endpoint = $this->getCheckoutEndpoint($service) . '/' . $service->getClient()->getApiCheckoutUtilityVersion() . '/originKeys';
		parent::__construct($service, $this->endpoint);
	}
}
