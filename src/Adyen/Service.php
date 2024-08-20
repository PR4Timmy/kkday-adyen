<?php

namespace Kkday\Adyen;

class Service
{
	/**
	 * @var Client
	 */
	private $client;

	/**
	 * @var bool
	 */
	protected $requiresApiKey = false;

	/**
	 * Service constructor.
	 *
	 * @param Client $client
	 * @throws AdyenException
	 */
	public function __construct(\Kkday\Adyen\Client $client)
	{
		$msg = null;

		// validate if client has all the configuration we need
		if (!$client->getConfig()->get('environment')) {
			// throw exception
			$msg = "The Client does not have a correct environment, use " . \Kkday\Adyen\Environment::TEST . ' or ' . \Kkday\Adyen\Environment::LIVE;
			throw new \Kkday\Adyen\AdyenException($msg);
		}

		$this->client = $client;
	}

	/**
	 * @return Client
	 */
	public function getClient()
	{
		return $this->client;
	}

	/**
	 * @return bool
	 */
	public function requiresApiKey()
	{
		return $this->requiresApiKey;
	}
}
