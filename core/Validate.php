<?php
namespace core;

class Validate
{
	private $errors = [];

	public function validate($requestFields = array(), $rules = array()) : void
	{
		foreach ($rules as $iName => $validations)
		{
			$this->_checkField($iName, $validations, $requestFields);
		}
	}

	private function _checkField($iName, $validations, $requestFields)
	{
		$expArray = explode('|', $validations);
		foreach ($expArray as $validation)
		{
			if(trim($validation) == 'required')
				$this->_required($validation, $iName, $requestFields);
			else if(strpos($validation, 'max') !== false)
				$this->_maxSize($iName, $validation, $requestFields);
			else if(strpos($validation, 'min') !== false)
				$this->_minSize($iName, $validation, $requestFields);
		}
	}

	// begin required
	private function _required($validation, $iName, $requestFields)
	{
		if ($this->_existField($requestFields, $iName) && $this->_emptyField($requestFields, $iName))
		{
			$this->_existField($requestFields, $iName);
			$this->_emptyField($requestFields, $iName);
		}
	}

	private function _existField($requestFields, $iName)
	{
		if(!isset($requestFields[$iName]))
		{
			$this->errors[] = $iName . ' field is not exist.';
			return false;
		}
		return true;
	}

	private function _emptyField($requestFields, $iName)
	{
		if(empty(trim($requestFields[$iName])))
		{
			$this->errors[] = $iName . ' field must not be empty.';
			return false;
		}
		return true;
	}
	// end required

	private function _maxSize($iName, $validation, $requestFields)
	{
		$size = preg_replace("/[^0-9\.]/", '', $validation);
		if($size < strlen($requestFields[$iName]))
		{
			$this->errors[] = $iName . ' field max size must be ' . $size;
			return false;
		}
		return true;
	}

	private function _minSize($iName, $validation, $requestFields)
	{
		$size = preg_replace("/[^0-9\.]/", '', $validation);
		if($size > strlen($requestFields[$iName]))
		{
			$this->errors[] = $iName . ' field min size must be ' . $size;
			return false;
		}
		return true;
	}

	public function fails()
	{
		if(empty($this->errors))
			return false;
		return true;
	}

	public function getErrors()
	{
		return $this->errors;
	}
}