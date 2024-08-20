<?php

namespace Kkday\Adyen\Service;

class Payment extends \Kkday\Adyen\Service
{
	/**
	 * @var ResourceModel\Payment\Authorise
	 */
	protected $authorise;

	/**
	 * @var ResourceModel\Payment\Authorise3D
	 */
	protected $authorise3D;

	/**
	 * @var ResourceModel\Payment\Authorise3DS2
	 */
	protected $authorise3DS2;

	/**
	 * Payment constructor.
	 *
	 * @param \Kkday\Adyen\Client $client
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct(\Kkday\Adyen\Client $client)
	{
		parent::__construct($client);
		$this->authorise = new \Kkday\Adyen\Service\ResourceModel\Payment\Authorise($this);
		$this->authorise3D = new \Kkday\Adyen\Service\ResourceModel\Payment\Authorise3D($this);
		$this->authorise3DS2 = new \Kkday\Adyen\Service\ResourceModel\Payment\Authorise3DS2($this);
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function authorise($params)
	{
		$result = $this->authorise->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function authorise3D($params)
	{
		$result = $this->authorise3D->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function authorise3DS2($params)
	{
		$result = $this->authorise3DS2->request($params);
		return $result;
	}
}
