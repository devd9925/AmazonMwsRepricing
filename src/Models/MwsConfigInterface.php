<?php
namespace devd9925\AmazonMwsRepricing\Models;


interface MwsConfigInterface
{
    /**
     * @return string
     */
    public function getServiceUrl();
    /**
     * @return string
     */
    public function getKeyId();
    /**
     * @return string
     */
    public function getAccessKey();
    /**
     * @return string
     */
    public function getApplicationName();
    /**
     * @return string
     */
    public function getApplicationVersion();
    /**
     * @return string
     */
    public function getMarketPlaceId();
    /**
     * @return string
     */
    public function getMerchantId();

}
