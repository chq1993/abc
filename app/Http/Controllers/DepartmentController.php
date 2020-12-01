<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = DB::table('departments')->get();
        return view('department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = DB::table('departments')->select('departments.id', 'departments.name')->get();
        return view('department.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dep = new Department([
            'name' => $request->get('txtName'),
            'description' => $request->get('txtDescription'),
            'kind' => $request->get('sltKind'),
            'department_parent' => $request->get('sltDepartmentParent')
        ]);
        $dep->save();
        return redirect()->to('department')->with('message-add', 'Thêm mới đơn vị thành công');
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
        $departments = DB::table('departments')->select('departments.id', 'departments.name')->get();
        $department = DB::table('departments')->find($id);
        return view('department.edit', compact('departments', 'department'));
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
        $department = Department::find($id);
        $department->name = $request->get('txtName');
        $department->description = $request->get(value('txtDescription'));
        $department->kind = $request->get('sltKind');
        $department->department_parent = $request->get('sltDepartmentParent');
        $department->save();
        return redirect('department')->with('message-update', "Cập nhật thông tin đơn vị thành công");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Department::find($id);
        $del->delete();
        return redirect('department')->with('message-delete', "Xóa đơn vị thành công");
    }
}
