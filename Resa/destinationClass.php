<?php

class infoDestination
{
	private $destName;
	private $numbPass;
	private $insurance;

	public function __construct()
	{
		$this->destName = "";
		$this->numbPass = 0;
		$this->insurance = false;
	}

	public function getDestName()
	{
		return $this->destName;
	}

	public function getNumbPass()
	{
		return $this->numbPass;
	}

	public function getInsurance()
	{
		return $this->insurance;
	}

	public function setValues($destName, $numbPass, $insurance)
	{
		$this->destName = $destName;
		$this->numbPass = $numbPass;
		$this->insurance = $insurance;
	}
}
?>