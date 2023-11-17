<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Folder;
use App\Task; // ★ 追加
use App\Mailform;
// ★ Authクラスをインポートする
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\MailformFolder; // ★ 追加


class PagesController extends Controller
{
    // explain
    public function index() {

        $today = "親投稿の";


        return view("kaisetu", ["kaisetu_today" => $today]);
    }

    // explain
    public function hensin($id) {

        // SELECT * FROM folders WHERE title = '科学' AND status = 1;
        $data = Folder::where('title','=','科学')
        ->where('status','=','1')
        ->where('status','=','1')
        ->where('status','=','1')
        ->get();

        if(empty($check)) {
            return $this->redirect("folder.index");
        }

        echo $id;
        exit;
    }


    public function mailform_top() {

        return view('tasks/mailform_top');
    }


    public function mailform_comfirm(MailformFolder $request ) {

        $param = $request->all();

        return view('tasks/mailform_comfirm', array("param" => $param));
       
    
    }

    public function thanks(Request $req) {

        $param = $req->all();
   
        $model = new Mailform();
        

        $model-> create([
            'name'=>$param['name'],
            'email'=>$param['email'],
            'subject'=>$param['subject'],
            'message'=>$param['message'],
        ]);



        // ありがとうページを表示する
        return view('tasks/thanks',array("param" => $param));
    }





}
