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
                            Add SubCategory
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Category *</label>
                                    <select name="catname" class="form-control" id="exampleInputEmail1">
                                
                                <option value="">-select category-</option>
                                <option value=""></option>
                                </select>
                                </div>
                               
                               
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SubCategory Name *</label>
                                    <input type="text" name="subcatname" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name *">
                                </div>
                                
                                <button type="submit" name="AddsubCategory" class="btn btn-info">AddSubCategory</button>
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