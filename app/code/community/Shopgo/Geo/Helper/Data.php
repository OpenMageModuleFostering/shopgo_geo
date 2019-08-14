<?php

class Shopgo_Geo_Helper_Data extends Mage_Core_Helper_Abstract {
	/**
	 * Get size of remote file
	 *
	 * @param $file
	 * @return mixed
	 */
	public function getSize($file) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $file);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_NOBODY, true);
		curl_exec($ch);
		return curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
	}

	/**
	 * Extracts single gzipped file. If archive will contain more than one file you will got a mess.
	 *
	 * @param $archive
	 * @param $destination
	 * @return int
	 */
	public function unGZip($archive, $destination) {
		$buffer_size = 4096;
		// read 4kb at a time
		$archive = gzopen($archive, 'rb');
		$dat = fopen($destination, 'wb');
		while (!gzeof($archive)) {
			fwrite($dat, gzread($archive, $buffer_size));
		}
		fclose($dat);
		gzclose($archive);
		return filesize($destination);
	}

	/* gets the data from a URL */
    public function getData($url) {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}
