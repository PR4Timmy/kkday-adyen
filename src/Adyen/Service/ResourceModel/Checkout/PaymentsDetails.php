<?php

namespace Kkday\Adyen\Service\ResourceModel\Checkout;

class PaymentsDetails extends \Kkday\Adyen\Service\AbstractCheckoutResource
{
	/**
	 * @var string
	 */
	protected $endpoint;

	/**
	 * PaymentsDetails constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct($service)
	{
		$this->endpoint = $this->getCheckoutEndpoint($service) . '/' . $service->getClient()->getApiCheckoutVersion() . '/payments/details';
		parent::__construct($service, $this->endpoint);
	}
}
