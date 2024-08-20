<?php

namespace Kkday\Adyen\Service\ResourceModel\Modification;

class Cancel extends \Kkday\Adyen\Service\AbstractResource
{
	/**
	 * @var string
	 */
	protected $endpoint;

	/**
	 * Include applicationInfo key in the request parameters
	 *
	 * @var bool
	 */
	protected $allowApplicationInfo = true;

	/**
	 * Cancel constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 */
	public function __construct($service)
	{
		$this->endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payment/' . $service->getClient()->getApiPaymentVersion() . '/cancel';
		parent::__construct($service, $this->endpoint, $this->allowApplicationInfo);
	}
}
