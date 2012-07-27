<?php

class Silex_counter_AccessObject extends XoopsSimpleObject
{
	public function __construct()
	{
		$this->initVar('id', XOBJ_DTYPE_INT);
		$this->initVar('uid', XOBJ_DTYPE_INT);
		$this->initVar('ip', XOBJ_DTYPE_STRING);
		$this->initVar('created', XOBJ_DTYPE_INT, time());
	}
}

class Silex_counter_AccessHandler extends XoopsObjectGenericHandler
{
	public $mTable   = 'silex_counter_access';
	public $mPrimary = 'id';
	public $mClass   = 'Silex_counter_AccessObject';
}


