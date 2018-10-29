<?php
namespace devd9925\AmazonMwsRepricing\Processors;

use devd9925\AmazonMwsRepricing\Models\MerchantDataListing;

/**
 * Class MerchantDataListing
 * @package Twinsen\AmazonRepricer\AmazonMwsRepricing
 *
 */
class MerchantDataListingProcessor
{
    /**
     * @param $inputFile
     * @return MerchantDataListing[]
     */
    public function processFile($inputFile)
    {
        return $this->processData(file_get_contents($inputFile));
    }

    /**
     * @param $inputData
     * @return MerchantDataListing[]
     */
    public function processData($inputData)
    {
        $inputData = mb_convert_encoding($inputData, "utf-8", "windows-1252");
        $csv = new \parseCSV();
        //$csv->encoding('Windows-1252', 'UTF-8');
        $csv->delimiter = "\t";
        $csv->parse($inputData);
        $itemList = array();
        foreach ($csv->data as $row) {
            $item = new MerchantDataListing();
            $item->setData($row);
            $itemList[] = $item;
        }

        return $itemList;
    }
}
