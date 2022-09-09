<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddBlog;
use App\Models\User;
//use DB;
class AddBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $userdata = User::all();
        return view('addblog',compact('userdata'));
        // $userdata = DB::table('users')->get();
        // return view('addblog',compact('userdata'));
        
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
            'user'=>'required',
            'title'=>'required',
            'comment'=>'required'
        ]);
        // add or insert data
        $data=array(
            'userid'=>$request->user,
            'title'=>$request->title,
            'comment'=>$request->comment
        );
        AddBlog::create($data);
        return redirect('/addblog')->with('success','Your Blogs Addedd successfully');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $data=AddBlog::all();
        // joins user and add blogs
        $data=AddBlog::join('users','addblogs.userid','=','users.id')->get(['addblogs.*','users.name','users.email']);
        return view('manageblog',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
