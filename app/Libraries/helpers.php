<?php

use Bcrypt\Bcrypt;
/*
 * Global helpers file with misc functions
 */

if (! function_exists('app_name')) {
	/**
	 * Helper to grab the application name
	 *
	 * @return mixed
	 */
	function app_name() {
		return \Config::get('app.name');
	}

	function main_url() {
		return env('MAIN_URL');
	}

	function upload_path() {
		return env('UPLOAD_PATH');
	}

	function myCustomHelper(){
	    return
	        "Im a custom helper";
	}

	function memeberNo(){
		return '644';
	}

	function maximumLoanAmount(){
		return 20000;
	}

	function getExcerpt($msg, $length){
		return $excerpt = substr($msg, 0, $length).'...';
	}

	function siri($password){
		$bcrypt = new Bcrypt();

		return $bcrypt->hash($password);
	}

	// function captchaCheck()
 //    {

 //        $response = Input::get('g-recaptcha-response');
 //        $remoteip = $_SERVER['REMOTE_ADDR'];
 //        $secret   = env('RE_CAP_SECRET');

 //        $recaptcha = new ReCaptcha($secret);
 //        $resp = $recaptcha->verify($response, $remoteip);
 //        if ($resp->isSuccess()) {
 //            return true;
 //        } else {
 //            return false;
 //        }

 //    }

}