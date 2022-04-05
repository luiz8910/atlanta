<?php

namespace App\Http\Controllers;

use App\Mail\Form;
use App\Site;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function index()
    {
        $data = Site::first();

        if($data){
            return view('index', compact('data'));
        }

        return view('index');

    }

    public function lazer()
    {
        return view('viagens_lazer');
    }

    public function corporativas()
    {
        return view('viagens_corporativas');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function sendForm(Request $request)
    {
        $data = $request->all();

        $user = User::first();

        Mail::to($user)->send(new Form($data));
    }

    public function admin()
    {
        return Site::first() ?
            view('admin.index', compact(['site' => Site::first()])) :
            view('admin.index');
    }

    public function sendFormAdmin(Request $request)
    {
        $site = new Site();

        $data = $site->first();

        if($request->file('img_roteiros'))
        {
            $fileName_roteiros = 'img_site/'.$this->generateRandomString().'.'.$request->file('img_roteiros')->extension();

            $request->file('img_roteiros')->move(public_path('img_site'), $fileName_roteiros);
        }
        if($request->file('img_viajar_1'))
        {
            $fileName_img_1 = 'img_site/'.$this->generateRandomString().'.'.$request->file('img_viajar_1')->extension();

            $request->file('img_viajar_1')->move(public_path('img_site'), $fileName_img_1);
        }
        if($request->file('img_viajar_2'))
        {
            $fileName_img_2 = 'img_site/'.$this->generateRandomString().'.'.$request->file('img_viajar_2')->extension();

            $request->file('img_viajar_2')->move(public_path('img_site'), $fileName_img_2);
        }
        if($request->file('img_viajar_3'))
        {
            $fileName_img_3 = 'img_site/'.$this->generateRandomString().'.'.$request->file('img_viajar_3')->extension();

            $request->file('img_viajar_3')->move(public_path('img_site'), $fileName_img_3);
        }
        if($request->file('img_viajar_4'))
        {
            $fileName_img_4 = 'img_site/'.$this->generateRandomString().'.'.$request->file('img_viajar_4')->extension();

            $request->file('img_viajar_4')->move(public_path('img_site'), $fileName_img_4);
        }

        if(!$data)
        {

            DB::table('sites')
              ->insert([
                  'roteiros' => $request->get('roteiros') ?? null,
                  'img_roteiros' => $fileName_roteiros ?? null,
                  'texto_viajar' => $request->get('texto_viajar') ?? null,
                  'texto_lazer' => $request->get('texto_lazer') ?? null,
                  'img_viajar_1' => $fileName_img_1 ?? null,
                  'img_viajar_2' => $fileName_img_2 ?? null,
                  'img_viajar_3' => $fileName_img_3 ?? null,
                  'img_viajar_4' => $fileName_img_4 ?? null,
              ]);
        }
        else{

            DB::table('sites')
                ->where('id', 1)
                  ->update([
                      'roteiros' => $request->get('roteiros') ?? $data->roteiros,
                      'img_roteiros' => $fileName_roteiros ?? $data->img_roteiros,
                      'texto_viajar' => $request->get('texto_viajar') ?? $data->texto_viajar,
                      'texto_lazer' => $request->get('texto_lazer') ?? $data->texto_lazer,
                      'img_viajar_1' => $fileName_img_1 ?? $data->img_viajar_1,
                      'img_viajar_2' => $fileName_img_2 ?? $data->img_viajar_2,
                      'img_viajar_3' => $fileName_img_3 ?? $data->img_viajar_3,
                      'img_viajar_4' => $fileName_img_4 ?? $data->img_viajar_4,
                  ]);
        }


        return redirect()->back();
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
