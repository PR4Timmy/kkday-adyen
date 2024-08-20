<?php

namespace Kkday\Adyen\Service\ResourceModel\DirectoryLookup;

class Directory extends \Kkday\Adyen\Service\AbstractResource
{
	/**
	 * @var string
	 */
	protected $endpoint;

	/**
	 * Directory constructor.
	 * https://test.adyen.com/hpp/directory.shtml
	 *
	 * @param \Kkday\Adyen\Service $service
	 */
	public function __construct($service)
	{
		$this->endpoint = $service->getClient()->getConfig()->get('endpointDirectorylookup');
		parent::__construct($service, $this->endpoint);
	}
}
