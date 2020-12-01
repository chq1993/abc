@extends('layouts.admin')
@section('content_layout')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Chỉnh sửa thông tin vai trò</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('role.index')}}">Vai trò</a></li>
                {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li> --}}
                <li class="breadcrumb-item active">Chỉnh sửa vai trò</li>
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
                    <h4 class="mt-0 header-title">Chỉnh sửa thông tin vai trò</h4>
                    <form class="" action="{{ route('role.update',[$role->id])}}" method="POST">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label>Tên vai trò</label>
                            <input type="text" class="form-control" id="txtName" name="txtName" required
                        placeholder="Nhập tên đơn vị" value="{{$role->name}}" />
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="txtDescription">Mô tả</label>
                                <textarea id="txtDescription" class="form-control" name="txtDescription"
                                    rows="3" >{{$role->description}}</textarea>
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
