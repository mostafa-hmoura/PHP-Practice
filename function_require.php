<?php
public function required($value)
		{
			if(!is_array($value))
			{
				return (trim($value) == '') ? false : true;
			}
			else
			{
				return (!empty($value));
			}
		}
		
		public function email($value)
		{
			if(empty($value)) return true;
			$valid = filter_var($value, FILTER_VALIDATE_EMAIL);
			return $valid ? true : false;
		}
		
		public function url($value)
		{
			if(empty($value)) return true;
			$options = array('options' => '|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i');
			$valid = filter_var($value, FILTER_VALIDATE_REGEXP, $options);
			return $valid ? true : false;		
		}
		
		public function ip($value)
		{
			if(empty($value)) return true;
			$valid = filter_var($value, FILTER_VALIDATE_IP);
			return $valid ? true : false;
		}
		
		public function bool($value)
		{
			$valid = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
			return $valid ? true : false;
		}
		
		public function alpha($value)
		{
			if(empty($value)) return true;
			$options = array('options' => array('regexp' => "/^[a-z]+$/i"));
			$valid = filter_var($value, FILTER_VALIDATE_REGEXP, $options);
			return $valid ? true : false;
		}
		
		public function numeric($value)
		{
			if(empty($value)) return true;
			$options = array('options' => array('regexp' => "/^[\-+]?[0-9]*\.?[0-9]+$/"));
			$valid = filter_var($value, FILTER_VALIDATE_REGEXP, $options);
			return $valid ? true : false;
		}
		
		public function decimal($value)
		{
			if(empty($value)) return true;
			$options = array('options' => array('regexp' => "/^[\-+]?[0-9]+\.[0-9]+$/"));
			$valid = filter_var($value, FILTER_VALIDATE_REGEXP, $options);
			return $valid ? true : false;
		}
		
		public function alpha_num($value)
		{
			if(empty($value)) return true;
			$options = array('options' => array('regexp' => '/^([a-z0-9])+$/i'));
			$valid = filter_var($value, FILTER_VALIDATE_REGEXP, $options);
			return $valid ? true : false;
		}
		
		public function alpha_num_dash($value)
		{
			if(empty($value)) return true;
			$options = array('options' => array('regexp' => '/^([a-z0-9_-])+$/i'));
			$valid = filter_var($value, FILTER_VALIDATE_REGEXP, $options);
			return $valid ? true : false;
		}
		
		public function alpha_num_sp($value)
		{
			if(empty($value)) return true;
			$options = array('options' => array('regexp' => '/^([a-z0-9 ])+$/i'));
			$valid = filter_var($value, FILTER_VALIDATE_REGEXP, $options);
			return $valid ? true : false;
		}
		
		public function alpha_num_plus($value)
		{
			if(empty($value)) return true;
			$options = array('options' => array('regexp' => '/^([a-z0-9 _-])+$/i'));
			$valid = filter_var($value, FILTER_VALIDATE_REGEXP, $options);
			return $valid ? true : false;
		}
		
		public function int($value)
		{
			if(empty($value)) return true;
			$options = array('options' => array('regexp' => '/^[\-+]?[0-9]+$/'));
			$valid = filter_var($value, FILTER_VALIDATE_REGEXP, $options);
			return $valid ? true : false;
		}
		
		public function in_range($value, $min, $max)
		{
			if(empty($value)) return true;
			$options = array('options' => array('min_range' => $min, 'max_range' => $max));
			$valid = filter_var($value, FILTER_VALIDATE_INT, $options);
			return $valid ? true : false;
		}