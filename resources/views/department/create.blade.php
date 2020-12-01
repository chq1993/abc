@extends('layouts.admin')
@section('content_layout')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Form Validation</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dasboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('department.index')}}">Đơn vị</a></li>
                <li class="breadcrumb-item active">Thêm mới</li>
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
                    <h4 class="mt-0 header-title">Thêm mới đơn vị</h4>

                    <form class="" action="{{ route('department.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Tên đơn vị</label>
                            <input type="text" class="form-control" id="txtName" name="txtName" required
                                placeholder="Nhập tên đơn vị" />
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="txtDescription">Mô tả</label>
                                <textarea id="txtDescription" class="form-control" name="txtDescription"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Loại đơn vị</label>
                            <div class="col-sm-12">
                                <select class="form-control" required id="sltKind" name="sltKind">
                                    <option>Chọn loại đơn vị</option>
                                    <option>Phòng/Ban</option>
                                    <option>Khoa/Viện/Bộ môn</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Đơn vị cha</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="sltDepartmentParent" name="sltDepartmentParent">
                                    <option value="">Chọn đơn vị cha</option>
                                    @foreach ($departments as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
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
