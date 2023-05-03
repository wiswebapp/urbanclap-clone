@extends('adminlte::page')
@section('title', 'Providers')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('plugins.Select2', true)
@section('plugins.AdminCustom', true)

@section('content_header')
    <h1>Providers Module</h1>
@stop

@section('content')
    <div class="card">
        <form action="{{route('admin.providers.index')}}">
            <div class="card-body row">
                <div class="form-group col-md-3">
                    <label>Filter By Name</label>
                    <input name="name" id="filter_name" class="form-control" value="{{ request()->query('name') }}" placeholder="Enter Name">
                </div>
                <div class="form-group col-md-3">
                    <label>Filter By Status</label>
                    <select name="status" id="filter_status" class="form-control select2">
                        <option value="">Select Status</option>
                        <option {{ request()->query('status') == "Active" ? 'selected' : '' }} value="Active">Filter By Active</option>
                        <option {{ request()->query('status') == "InActive" ? 'selected' : '' }} value="InActive">Filter By InActive</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <button class="btn btn-default filter-search"><i class="fa fa-search"></i> Search</button>
                    <a href="{{ route('admin.providers.index') }}" class="btn btn-default filter-search"><i class="fas fa-undo"></i> Reset</a>
                </div>
            </div>
        </form>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="float-right">
                <a href="{{ route('admin.providers.create') }}" class="btn btn-default"><i class="fa fa-plus"></i> Add Data</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
        </table>
        </div>
    </div>
@stop

@section('js')
<x-alert-msg />

<script>
$(document).ready(function() {
    generateDataTable('{{ route("admin.providers.index") }}', [
        {data: 'DT_RowIndex', name: 'id', orderable: false, searchable: false},
        {data: 'name', name: 'name'},
        {data: 'phone', name: 'phone'},
        {data: 'email', name: 'email'},
        {data: 'status', name: 'status'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ], {
        'status' : $("#filter_status").val(),
        'name' : $("#filter_name").val(),
    });
});

function removeData(id) {
    removeDataFromDatabase('{{route("admin.providers.index")}}', id);
}
</script>
@stop

