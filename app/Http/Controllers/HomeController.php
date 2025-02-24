<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\member;
use App\Models\Picture;
use App\Models\Qarar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    //
  public function login(){
    return view('auth.login');
  }
  public function register(){
    return view('auth.register');
  }
  public function show_register(Request $request){
    $validate=$request->validate([
        'name'=>'required|string|max:255',
        'email'=>'required|email|unique:users',
        'password'=>'required|string|min:8|confirmed',
    ]);
    $user=User::create($validate);
    Auth::login($user);

    return redirect()->route('home.admin');
  }
  public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('auth.login');
  }
  public function show_login(Request $request){
    $validate=$request->validate([
        'email'=>'required|email',
        'password'=>'required|string'
    ]);
    if(Auth::attempt($validate)){
        $request->session()->regenerate();
        return redirect()->route('home.admin');
    }
    throw ValidationException::withMessages([
        'credentials' =>'sorry'
    ]);
  }
    public function admin(){
        $posts=member::all()->count();
        $meets=Meeting::all()->count();
        $qarar=Qarar::all()->count();
        $pic=Picture::all()->count();
        return view('home.admin', compact('posts', 'meets', 'qarar', 'pic'));
    }
    public function add(){
        return view('home.add');
    }
    public function show(){
        $data=member::orderBy('id')->paginate(2);
        return view('home.show', compact('data'));
    }
    public function store(Request $request){
        $posts=new member();
        $posts->name=$request->name;
        $posts->role=$request->role;
        $posts->job=$request->job;
        $posts->save();
        return redirect()->back()->with('message', 'تم اضافة الأعضاء بنجاح');
    }

    public Function delete_all(){
        $data=DB::table('members')->truncate();
        return redirect()->back();
    }
    public function delete($id){
        $data=member::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function agree($id){
        $data=member::find($id);
        $data->status='تم التوقيع';
        $data->save();
        return redirect()->back();
    }
    public function disagree($id){
        $data=member::find($id);
        $data->status='لم يتم التوقيع';
        $data->save();
        return redirect()->back();
    }
    public function edit($id){
        $data=member::find($id);
        return view('home.edit', compact('data'));
    }
    public function update(Request $request, $id){
        $posts=member::find($id);
        $posts->name=$request->name;
        $posts->role=$request->role;
        $posts->job=$request->job;
        $posts->save();
        return redirect()->back()->with('message', 'تم تحديث المعلومات بنجاح');
    }
    /*public function print($id){
        $data=member::find($id);

        $pdf=Pdf::loadView('home.invoice', compact('data'));
        return $pdf->download('invoice.pdf');

    }*/

    public function meet(){

        return view('home.meet');
    }
    public function store_meet(Request $request){
        $data=new Meeting();
        $data->title=$request->title;
        $data->description=$request->description;
        $data->day=$request->day;
        $data->date=$request->date;
        $data->save();
        return redirect()->back()->with('message', 'تمت اضافة معلومات الاجتماع بنجاح');

    }
    public  function show_meet(){
        $data=Meeting::orderBy('id')->paginate(3);
        return view('home.show_meet', compact('data'));
    }

    public function qarar(){
        return view('home.qarar');
    }
    public function store_qarar(Request $request){
        $data=new Qarar();
        $data->title=$request->title;
        $data->details=$request->details;
        $data->save();
        return redirect()->back()->with('message', 'تمت اضافة القرار بنجاح ');
    }
    public function show_qarar(){
        $show=Qarar::orderBy('id')->paginate(3);
        return view('home.show_qarar', compact('show'));

    }
    public function approve($id){
        $show=Qarar::find($id);
        $show->status='تم الاعتماد';
        $show->save();
        return redirect()->back();
    }
    public function picture(){
        return view('home.picture');
    }
    public function store_image(Request $request){
        $data=new Picture();
        $data->title=$request->title;
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images', $imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect()->back()->with('message', 'تم اضافة الصورة بنجاح');
    }
    public  function show_pic(){
        $pic=Picture::orderBy('id')->paginate(4);
        return view('home.show_pic', compact('pic'));
    }
}
