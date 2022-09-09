<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddCategory;
class AddCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('toysshop.admin.addcategory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryname'=>'required',
        ]);
        // add or insert data
        $data=array(
            'categoryname'=>$request->categoryname,
        );
        AddCategory::create($data);
        return redirect('/admin-login/addcategory')->with('success','Your Category Addedd successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddCategory::all();
        return view('toysshop.admin.managecategory',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=AddCategory::where('id',$id)->first();
        return view('toysshop.admin.editcategory',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // update data
         $data=array(
            'categoryname'=>$request->categoryname,
        );
        AddCategory::where('id',$id)->update($data);
        return redirect('/admin-login/managecategory')->with('success','Your Category Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddCategory::where('id',$id)->delete();
        return redirect('/admin-login/managecategory')->with('del','Your Category Deleted successfully');
    }
}
