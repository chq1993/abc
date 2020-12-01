@extends('layouts.admin')
@section('content_layout')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Quản lý người dùng</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Người dùng</a></li>
                <li class="breadcrumb-item active">Đăng ký người dùng</li>
            </ol>
        </div>
    </div>
</div>
<!-- end row -->

<div class="page-content-wrapper">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Đăng ký người dùng mới</h4>
                    <p>Bắt buộc nhập với các trường có dấu *</p>

                <form class="" action="{{ route('user.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Tên đăng nhập <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="txtUserName" name="txtUserName" required placeholder="User name" />
                        </div>

                        <div class="form-group">
                            <label>Mật khẩu <span style="color: red">*</span></label>
                            <div>
                                <input type="password" id="pass2" class="form-control" required
                                    placeholder="Password" />
                            </div>
                            <div class="m-t-10">
                                <input type="password" class="form-control" required data-parsley-equalto="#pass2"
                                    placeholder="Re-Type Password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Họ và đệm <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" placeholder="First Name" required/>
                        </div>

                        <div class="form-group">
                            <label>Tên <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Last Name" required/>
                        </div>

                        <div class="form-group">
                            <label>E-Mail <span style="color: red">*</span></label>
                            <div>
                                <input type="email" class="form-control" required parsley-type="email"
                                    placeholder="Enter a valid e-mail" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" id="txtAddress" name="txtAddress" placeholder="Address" />
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <div>
                                <input data-parsley-type="number" type="text" id="txtMobilePhone" name="txtMobilePhone" class="form-control" placeholder="Mobile-Phone" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Đơn vị <span style="color: red">*</span></label>
                            <div class="col-sm-12">
                                <select class="form-control"  id="sltDepartment" name="sltDepartment" required>
                                    <option>Chọn đơn vị</option>
                                    @foreach ($department as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Vai trò <span style="color: red">*</span></label>
                            <div class="col-sm-12">
                                <select class="form-control"  id="sltDepartment" name="sltDepartment" required>
                                    <option>Chọn vai trò</option>
                                    @foreach ($role as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="txtDesignation">Designation <span style="color: red">*</span></label>
                            <input type="text" name="txtDesignation" id="txtDesignation" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="startFrom">Start date <span style="color: red">*</span></label>
                            <input type="date" name="startFrom" id="startFrom" class="form-control" placeholder="dd/mm/yyyy" required>
                        </div>

                        <div class="form-group">
                            <label for="">Ảnh <span style="color: red">*</span></label>
                            <input type="file" name="image" class="form-control" accept="image/*" id="image" required="">
                        </div>
                        {{-- <div class="form-group">
                            <label>Textarea</label>
                            <div>
                                <textarea required class="form-control" rows="5"></textarea>
                            </div>
                        </div> --}}
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
