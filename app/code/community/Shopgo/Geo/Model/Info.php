<?php

class Shopgo_Geo_Model_Info extends Shopgo_Geo_Model_Abstract
{
    public function getDatFileDownloadDate()
    {
        return file_exists($this->local_file) ? filemtime($this->local_file) : 0;
    }
}