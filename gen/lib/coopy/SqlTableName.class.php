<?php

class coopy_SqlTableName {
	public function __construct($name = null, $prefix = null) {
		if(!php_Boot::$skip_constructor) {
		if($prefix === null) {
			$prefix = "";
		}
		if($name === null) {
			$name = "";
		}
		$this->name = $name;
		$this->prefix = $prefix;
	}}
	public $name;
	public $prefix;
	public function toString() {
		if($this->prefix === "") {
			return $this->name;
		}
		return _hx_string_or_null($this->prefix) . "." . _hx_string_or_null($this->name);
	}
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->__dynamics[$m]) && is_callable($this->__dynamics[$m]))
			return call_user_func_array($this->__dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call <'.$m.'>');
	}
	function __toString() { return $this->toString(); }
}
