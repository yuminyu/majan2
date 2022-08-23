<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Janso;
use Illuminate\Support\Str;
use Auth;

class JansotorokuController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);
        $janso = new Janso;
        $janso->name = $request->name;
        $janso->tokutyo = $request->tokutyo;
        $janso->seiketsusa = $request->seiketsusa;
        $janso->huniki = $request->huniki;
        $janso->yasusa = $request->yasusa;
        $janso->mataikitai = $request->mataikitai;
        $janso->location = $request->location;
        
        $imgfile = $request->file('jansougazou');

        if ( !empty($imgfile) ) {
            // ファイルの拡張子取得
            $ext = $imgfile->guessExtension();
    
            //ファイル名を生成
            $fileName = Str::random(32).'.'.$ext;
            //dd($fileName);

            // 画像のファイル名を任意のDBに保存
            $janso->jansougazou = $fileName;
            
            $janso->save();
    
            //public/uploadフォルダを作成
            $target_path = public_path('/uploads/');
    
            //ファイルをpublic/uploadフォルダに移動
            $imgfile->move($target_path,$fileName);

            return view('dashboard');
        }
    }
    
    public function index(){
        
        $jansos = Janso::orderBy('id', 'asc')->get();
        //dd($jansos);

        return view('osusume',['jansos'=>$jansos]);
    }
}