<?php

class XmlParsers {
	private $file_path;

	public function setFilePath($file_path) {
		$this->file_path = $file_path;
	}

	public function getFileContents() {
		if (file_exists($this->file_path)) {
		    return file_get_contents($this->file_path);
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
		return $this->parseFile($this->getFileContents());
	}
}
