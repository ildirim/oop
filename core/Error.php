<?php
class Error
{
	public function catchError($e)
	{
		try {
			return $e;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}
}