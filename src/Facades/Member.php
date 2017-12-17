<?php namespace Bantenprov\Member\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Member facade.
 *
 * @package Bantenprov\Member
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Member extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'member';
    }
}
