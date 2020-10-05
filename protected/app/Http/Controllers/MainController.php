<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\blogheader;

class MainController extends Controller{
    public function index(){
        $data['title']='Butuhuang';
        return view('index',$data);
    }

    public function blog(){
        $data['title']='Blog | Butuhuang';
        $data['blog'] = blogheader::where('active','1')->get();
        return view('blog',$data);
    }

    public function detail(){
        $data['title']='Blog Detail | Butuhuang';
        return view('detail',$data);
    }

    public function contact(){
        $data['title']='Contact | Butuhuang';
        return view('contact',$data);
    }

    public function contact_action(Request $request){
        $contact = new contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->create_user = '0';
        $contact->create_date = date("Y-m-d H:i:s");
        $contact->save();
        return redirect('contact');
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
