<?php

namespace Maatwebsite\Excel\Exceptions;

use Exception;
use Throwable;

/**
 * Class IncorrectIdException
 * @package Maatwebsite\Excel\Exceptions
 * @author Adnane Nejbah <0664310785> <adnane.nejbah.dev@gmail.com | adnane.nejbah.dev@outlook.com>
 * @author Adil Chbada <0777786877> <nanoadil@gmail.com>
 */
class IncorrectIdException extends Exception implements LaravelExcelException
{
	/**
	 * @param string         $message
	 * @param int            $code
	 * @param Throwable|null $previous
	 */
	public function __construct(
		$message = 'ID input is incorrect.',
		$code = 0,
		Throwable $previous = null
	) {
		parent::__construct($message, $code, $previous);
	}
}
