<?php

namespace Kkday\Adyen\Service\ResourceModel\Checkout;

class PaymentsResult extends \Kkday\Adyen\Service\AbstractCheckoutResource
{
	/**
	 * @var string
	 */
	protected $endpoint;

	/**
	 * PaymentsResult constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct($service)
	{
		$this->endpoint = $this->getCheckoutEndpoint($service) . '/' . $service->getClient()->getApiCheckoutVersion() . '/payments/result';
		parent::__construct($service, $this->endpoint);
	}
}
