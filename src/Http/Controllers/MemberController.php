<?php namespace Bantenprov\Member\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\Member\Facades\Member;
use Bantenprov\Member\Models\Member as MemberModel;

use Validator;
/**
 * The MemberController class.
 *
 * @package Bantenprov\Member
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MemberController extends Controller
{
    protected $memberModel;
    protected $userModel;
    protected $stafModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel;
        $this->userModel = config('member.models.users');
        $this->stafModel = config('member.models.stafs');
    }

    public function index()
    {
        $members = $this->memberModel->paginate(10);

        return $members;
        //return view('member::member.index',compact('members'));
    }

    public function create()
    {        

        $users = $this->userModel->all();

        return $users;        
    }

    public function show($id)
    {

        $member = $this->memberModel->find($id);
        return $member;

    }

    public function store($req)
    {
        $validator = Validator::make($req,[
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        if($this->memberModel->where('user_id',$req['user_id'])->count() > 0){
            return redirect()->back()->with('message','This user already register as member !');
        }    
        
        if($this->stafModel->where('user_id',$req['user_id'])->count() > 0){
            return redirect()->back()->with('message','This user already register as staf !');
        }

        // $this->memberModel->create($req);

        // return redirect()->back()->with('message','Add data success');

        $member_new_add = $this->memberModel->create($req);

        return redirect()->route('userManagementShow',$member_new_add->getUser->id)->with('message','Add data success, Change Role to Member');
    }

    public function edit($id)
    {        
        $users = $this->userModel->all();
        $member = $this->memberModel->find($id);

        $response = (object) ['users' => $users,'member' => $member];

        return $response;
    }

    public function update($id, $req)
    {
        $validator = Validator::make($req,[
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        if($this->memberModel->where('user_id',$req['user_id'])->count() > 0){
            return redirect()->back()->with('message','This user already register as member !');
        }    
        
        if($this->stafModel->where('user_id',$req['user_id'])->count() > 0){
            return redirect()->back()->with('message','This user already register as staf !');
        }

        $this->memberModel->find($id)->update($req);

        return redirect()->back()->with('message','Update data success');
    }

    public function destroy($id)
    {
        $this->memberModel->find($id)->delete();
        return redirect()->back();
    }

    public function countMember()
    {
        $result = $this->memberModel->all()->count();

        return $result;
    }

    public function demo()
    {
        return Member::welcome();
    }
}
