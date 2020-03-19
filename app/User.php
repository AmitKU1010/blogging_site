<?php
namespace App;
use App\Profile;
use App\Role;
use App\Post; 
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Overtrue\LaravelFollow\Traits\CanLike;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use CanLike;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'role_id','phone_number','gender','pincode','name','address','dob','profile_image','qualification','department_name_user','branch','id_proof','working_days','working_time_in','working_time_out','account_number','ifsc_code','doj','priority','strength','bank_name','bank_branch','toolkit_status','tool_percentage','safety_material','safety_percentage','insurance_status','workshop_status','allow_workshop','workshop_address','workshop_insurance_status','maintain_stock','stock_percentage','ride_on','reference_address','vehicle_number','team_member_name','team_member_gender','team_member_address','team_member_con_number','team_member_photo','otp','provider','image','provider_id','title'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
