<?php

namespace Kkday\Adyen\HttpClient;

interface ClientInterface
{
	/**
	 * @param \Kkday\Adyen\Service $service
	 * @param $requestUrl
	 * @param $params
	 * @return mixed
	 */
	public function requestJson(\Kkday\Adyen\Service $service, $requestUrl, $params);

	/**
	 * @param \Kkday\Adyen\Service $service
	 * @param $requestUrl
	 * @param $params
	 * @return mixed
	 */
	public function requestPost(\Kkday\Adyen\Service $service, $requestUrl, $params);
}
