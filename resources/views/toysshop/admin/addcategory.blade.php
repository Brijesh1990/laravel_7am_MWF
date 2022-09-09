@extends('toysshop.admin.layout')
@section('title-name')
Add category
@endsection
@section('dashboard')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Category
                        </header>
                        <div class="panel-body">
                          

                            <div class="position-center">

                                <form role="form" method="post">
                                    @csrf

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
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name *</label>
                                    <input type="text" name="categoryname" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name *">
                                </div>
                                
                                <button type="submit" name="AddCategory" class="btn btn-info">AddCategory</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
      
        </div>
     
   
        </div>
        </div>


        <!-- page end-->
        </div>
</section>
 
@endsection