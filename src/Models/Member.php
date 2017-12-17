<?php namespace Bantenprov\Member\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * The MemberModel class.
 *
 * @package Bantenprov\Member
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Member extends Model
{
    use SoftDeletes;

    protected $table = 'member';

    public $timesstamps = true;

    protected $dates = ['deleted_at'];

    protected $fillable = ['user_id'];
    //protected $fillable = ['user_id','full_name'];

    protected $hidden = ['deleted_at'];
    
    /* Table relation */

    public function getUser()
    {
        return $this->hasOne(config('member.models.user'),'id','user_id');
    }

    public function getTask()
    {
        return $this->hasMany(config('member.models.task'),'user_id','user_id');
    }
}
