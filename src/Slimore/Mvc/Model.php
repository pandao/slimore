<?php

/**
 * Slimore - The fully (H)MVC framework based on the Slim PHP framework.
 *
 * @author      Pandao <slimore@ipandao.com>
 * @copyright   2015 Pandao
 * @link        http://github.com/pandao/slimore
 * @license     MIT License https://github.com/pandao/slimore#license
 * @version     0.1.0
 * @package     Slimore\Mvc
 */

namespace Slimore\Mvc;

/**
 * Class Model
 *
 * @author Pandao
 * @package Slimore\Mvc
 */

class Model extends \Illuminate\Database\Eloquent\Model
{
    /**
     * @var string
     */

	protected $table = null;

    /**
     * @var bool
     */

    public    $timestamps = false;

    /**
     * Constructor
     */

	public function __construct()
	{
		parent::__construct();
	}
}