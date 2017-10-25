<?php

class infoDestination
{
	private $destName;
	private $numbPass;
	private $inssurance;

	public function __construct()
	{
		$this->destName = "";
		$this->numbPass = 0;
		$this->inssurance = false;
	}

	public function getDestName()
	{
		return $this->destName;
	}

	public function getNumbPass()
	{
		return $this->numbPass;
	}

	public function getInssurance()
	{
		return $this->inssurance;
	}

	public function setValues($destName, $numbPass, $inssurance)
	{
		$this->destName = $destName;
		$this->numbPass = $numbPass;
		$this->inssurance = $inssurance;
	}
}
?>