<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = DB::table('departments')->get();
        $role = DB::table('roles')->get();
        return view('user.create', compact('department', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user'=>'required|string|max:255|unique:users',
            'first_name'=>'required',
            'last_name'=>'required',
            'mail'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string',
            'department_id'=>'required',
            'role_id'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png',
            'start_form'=>'required',
            'designation'=>'require'
        ]);

        $data = $request->all();
        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'),$image);
        }else{
            $image="avatar1.png";
        }
        $data['name'] = $request->first_name.' '.$request->last_name;
        $data['image'] = $image;
        $data['password'] = bcrypt($request->password);
        User::created($data);
        return redirect()->to('user.create')->with('massage','Thêm mới người dùng thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
