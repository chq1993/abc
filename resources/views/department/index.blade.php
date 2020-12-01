@extends('layouts.admin')

@section('content_layout')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Form Validation</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                <li class="breadcrumb-item active">Form Validation</li>
            </ol>
        </div>
    </div>
</div>
<!-- end row -->

<div class="page-content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="drow">
                        <div class="dcol">
                            <h4 class="mt-0 header-title">Default Datatable</h4>
                            <p class="text-muted m-b-30">DataTables
                            </p>
                        </div>
                        <div class="dcol">
                            @if (Session::has('message-add'))
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span
                                        aria-hidden="true">&times;</span></button>
                                <p>{{Session::get('message-add')}}</p>
                            </div>
                            @endif
                        </div>
                        <div class="dcol">
                            @if (Session::has('message-delete'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span
                                        aria-hidden="true">&times;</span></button>
                                <p>{{Session::get('message-delete')}}</p>
                            </div>
                            @endif
                        </div>
                        <div class="dcol">
                            @if (Session::has('message-update'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span
                                        aria-hidden="true">&times;</span></button>
                                <p>{{Session::get('message-update')}}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <table id="datatable" class="table table-bordered table-striped dt-responsive"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead style="background-color: #35a989; color: white; text-align: center;">
                            <tr>
                                <th style="vertical-align: middle">STT</th>
                                <th style="vertical-align: middle">Tên đơn vị</th>
                                <th style="vertical-align: middle">Mô tả</th>
                                <th style="vertical-align: middle">Loại đơn vị</th>
                                <th style="vertical-align: middle">Đơn vị cấp trên</th>
                                <th style="vertical-align: middle">Khởi tạo</th>
                                <th style="vertical-align: middle">Chỉnh sửa</th>
                                <th style="vertical-align: middle">Thao tác</th>
                            </tr>
                        </thead>


                        <tbody>
                            @php
                            $stt = 0;
                            @endphp
                            @if (count($departments)>0)
                            @foreach ($departments as $item)
                            @php
                            $stt++;
                            @endphp
                            <tr>
                                <td style="text-align: center">{{$stt}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->kind}}</td>
                                <td>{{$item->department_parent}}</td>
                                <td style="text-align: center">{{$item->created_at}}</td>
                                <td style="text-align: center">{{$item->updated_at}}</td>
                                <td style="white-space:nowrap !important" align="center">
                                    <div class="btn-group" style="margin-right: 10px">
                                        <a href="{{ route('department.edit',[$item->id])}}">
                                            <i class="btn btn-primary fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('department.destroy', [$item->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger fas fa-trash" type="submit"
                                                onclick="return confirm('Bạn có chắc muốn xóa {{$item->name}}?')"></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <td>No departments to display</td>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
        $().DataTable();
    </script>
    @endsection
