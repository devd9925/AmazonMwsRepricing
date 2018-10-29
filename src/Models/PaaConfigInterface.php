<?php
namespace devd9925\AmazonMwsRepricing\Models;


interface PaaConfigInterface
{
    /**
     * @return string
     */
    public function getCountry();
    /**
     * @return string
     */
    public function getAccessKey();
    /**
     * @return string
     */
    public function getSecretKey();
    /**
     * @return string
     */
    public function getAssociateTag();
}
