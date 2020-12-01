@extends('layouts.admin')
@section('content_layout')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Chỉnh sửa thông tin đơn vị</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('department.index')}}">Đơn vị</a></li>
                {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li> --}}
                <li class="breadcrumb-item active">Chỉnh sửa đơn vị</li>
            </ol>
        </div>
    </div>
</div>
<!-- end row -->

<div class="page-content-wrapper">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card m-b-20 ">
                <div class="card-body">
                    {{-- @if(Session::has('')) --}}
                    <h4 class="mt-0 header-title">Chỉnh sửa thông tin đơn vị</h4>
                    <form class="" action="{{ route('department.update',[$department->id])}}" method="POST">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label>Tên đơn vị</label>
                            <input type="text" class="form-control" id="txtName" name="txtName" required
                        placeholder="Nhập tên đơn vị" value="{{$department->name}}" />
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="txtDescription">Mô tả</label>
                                <textarea id="txtDescription" class="form-control" name="txtDescription"
                                    rows="3" >{{$department->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Loại đơn vị</label>
                            <div class="col-sm-12">
                                <select class="form-control" required id="sltKind" name="sltKind" >
                                    @if ($department->kind === "Phòng/Ban")
                                        <option selected>Phòng/Ban</option>
                                        <option>Khoa/Viện/Bộ môn</option>
                                    @else
                                        <option>Phòng/Ban</option>
                                        <option selected>Khoa/Viện/Bộ môn</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Đơn vị cha</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="sltDepartmentParent" name="sltDepartmentParent">
                                    @foreach ($departments as $item)
                                    @if ($department->department_parent === $item->id)
                                        <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                    @else
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Update
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
<!-- end page content-->
@endsection
