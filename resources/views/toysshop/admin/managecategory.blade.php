@extends('toysshop.admin.layout')
@section('title-name')
Manage category
@endsection
@section('dashboard')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Manage All Category
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">

      
<div class="form-group col-md-9 ml-5">
@if(Session::has('del'))
<div class="alert alert-danger">
 <strong> {{ Session::get('del') }}</strong>
</div>
@endif  
</div>
<div class="form-group col-md-9 ml-5">
@if(Session::has('success'))
<div class="alert alert-success">
 <strong> {{ Session::get('success') }}</strong>
</div>
@endif  
</div>
      
      
      <tr>
        <th>Id</th>
        <th>CategoryName</th>
        <th>Created date</th>
        <th>Action</th>
      </tr>
      @foreach($data as $row)

      <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->categoryname }}</td>
        <td>{{ $row->created_at }}</td>
        <td><a href='{{ URL("/admin-login/managecategory/{$row->id}")}}' class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Data')"> <i class="fa fa-trash"></i></a> | <a href='{{ URL("/admin-login/editcategory/{$row->id}")}}' class="btn btn-info btn-sm" onclick="return confirm('Are You sure to edit data')"> <i class="fa fa-edit"></i></a> </td>
       
      </tr>
      @endforeach
      
      </table>
    </div>
    </div>
    </div>
  @endsection