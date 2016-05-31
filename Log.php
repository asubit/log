<?php

namespace Drupal\module\Service;

class Log {
	const LOG_FILE  = '/tmp/custom.log';
	const LOG_EMAIL = 'your.email@domain.org';

	/**
	 * Log message in file
	 * @param string $message
	 * @param string $file
	 * @return null
	 */
	public function file($message, $file = Log::LOG_FILE) {
		ini_set("log_errors", 3);
		ini_set("error_log", Log::LOG_FILE);
		error_log($message);
		return true;
	}

	/**
	 * Log message by mail
	 * @param string $message
	 * @param string $mail
	 * @return null
	 */
	public function mail($message, $mail = Log::LOG_EMAIL) {
		ini_set("log_errors", 1);
		ini_set("error_log", Log::LOG_EMAIL);
		error_log($message);
		return true;
	}
}
