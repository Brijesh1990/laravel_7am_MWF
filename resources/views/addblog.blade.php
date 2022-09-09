<x-app-layout>
<x-slot name="header">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Welcome to Our Blogs') }}
<a href="/addblog" class="btn btn-sm btn-dark">Add Blogs</a>
&nbsp;&nbsp;&nbsp;
<a href="/manageblog" class="btn btn-sm btn-dark">Manage Blogs</a>
&nbsp;&nbsp;&nbsp;
<a href="/addgallery" class="btn btn-sm btn-dark">Add Gallery</a>
&nbsp;&nbsp;&nbsp;
<a href="/managegallery" class="btn btn-sm btn-dark">Manage Gallery</a>
&nbsp;&nbsp;&nbsp;



</h2>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 bg-white border-b border-gray-200">

<div class="row">

<div class="col-md-4 text-center">Add Blogs
<br>
<p class="text-justify">
<img src="{{ asset('assets/images/manageblogs.gif')}}" class="img-fluid">
</p> 
</div>         
<div class="col-md-8">


<div class="form-group">
@if($errors->any())
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<ul>
<li>{{ $error }}</li>
</ul>
@endforeach
</div>
@endif  
</div>


<div class="form-group">
@if(Session::has('success'))
<div class="alert alert-success">
<strong> {{ Session::get('success') }}</strong>
</div>
@endif  
</div>

<form method="post">
@csrf 

<div class="form-group">
<label>Select User *</label>      
<select  name="user" placeholder="Title *" class="form-control mt-2">
<option></option>
@foreach($userdata as $row)
<option value="{{ $row->id }}">{{ $row->name }}</option>
@endforeach

</select>
</div>
<div class="form-group">
<input type="text" name="title" placeholder="Enter Title *" class="form-control mt-2">
</div>

<div class="form-group">
<textarea name="comment"  placeholder="Enter Comment *" class="form-control mt-2"></textarea>
</div>

<div class="form-group mt-2">
<input type="submit" name="addblog" value="Create a Post" class="btn btn-info btn-sm">
</div>

</form>


</div>
</div>



</x-app-layout>
