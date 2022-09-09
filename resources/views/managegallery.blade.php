
<x-app-layout>
<x-slot name="header">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Welcome to Our Blogs') }}
&nbsp;&nbsp;&nbsp;
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
<div class="col-md-3 text-center">Manage All Gallery
<br>
<p class="text-justify">
<img src="{{ asset('assets/images/manageblogs.gif')}}" class="img-fluid">
</p> 

</div>         
<div class="col-md-9"  style="max-width:100%;overflow: auto;">
    <table class="table" id="example">
        <thead>
        <tr>
            <th>Id</th>
            <th>GalleryName</th>
            <th>GalleryImage</th>
            <th>Created Date</th>
            <th>Updated Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
         @foreach($data as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->gelleryname}}</td>
            <td><img src="{{ asset('uploads/gallery/'.$row->gelleryimage) }}" class="img-fluid" style="width:125px; height:120px"></td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->updated_at}}</td>

            <td>
                
               <div style="min-width:120px;"> <a href='{{ URL("/managegallery/{$row->id}")}}' class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete Data')"> <i class="bi bi-trash"></i></a> | <a href='{{ URL("/editgallery/{$row->id}")}}' class="btn btn-info btn-sm" onclick="return confirm('Are You sure to edit data')"> <i class="bi bi-pencil"></i></a>
                </div>
            
            </td>
        </tr>
        
        @endforeach
    </tbody>
    </table>

</div>
</div>
</x-app-layout>
