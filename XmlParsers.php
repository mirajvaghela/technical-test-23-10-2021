<?php

class XmlParsers {
	private $file_path;
	private $xml_file_contents = null;

	public function setFilePath($file_path) {
		$this->file_path = $file_path;
	}

	public function getFileContents() {
		if (file_exists($this->file_path)) {
			var_dump(file_get_contents($this->file_path)); exit;
		    $this->xml_file_contents = file_get_contents($this->file_path);
		} else {
		    return false;
		}
	}

	public function parseFile($file_content) {
		if ($file_content) {
			$rentals = new SimpleXMLElement($file_content);
			$result = [];
			foreach ($rentals as $property_type => $attributes) {
			    $result[(string)$attributes->uniqueID] = $property_type;
			}

			return $result;
		}
		
		return false;
	}

	public function generateIds($filepath) {
		$this->setFilePath($filepath);
		$this->parseFile($this->getFileContents());
	}
}
