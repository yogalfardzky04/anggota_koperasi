<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MemberController extends Controller {

    public function dashboard()
    {
        $view['page_title'] = "Dashboard";

        return view('web.dashboard', $view);
    }

    public function index()
    {
        $view['data'] = \App\Models\Member::orderBy('name')->get();
		$view['page_title'] = "DAFTAR ANGGOTA KOPERASI";

		return view('web.index', $view);
    }


    public function create()
    {
        $view['page_title'] = "DATA ANGGOTA KOPERASI";
      

		return view('web.form', $view);
    }

    public function save(Request $request)
    {
        try {
			\DB::beginTransaction();

            if(!empty($request->id))
            {
                $member = \App\Models\Member::find($request->id);
            }else
            {
                $member = new \App\Models\Member();
            }

            $imageName = time().'.'.$request->image->extension();
            $uploadedImage = $request->image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
            

            $member->member_number  = $request->member_number;
            $member->name           = $request->name;
            $member->gender         = $request->gender;
            $member->address        = $request->address;
            $member->date_of_birth  = $request->date_of_birth;
            $member->join_date      = $request->join_date;
            $member->status         = $request->status;
            $member->image          = $imagePath;
            $member->save();

			\DB::commit();
			return back()->with('message', array('type'=>'success', 'msg'=>'Data Berhasil disimpan'));
		}
		catch(\Exception $e) {
			\DB::rollBack();
			return back()->with('message', array('type'=>'error', 'msg'=>'Data gagal disimpan. <b>Pesan Error :</b>'.$e->getMessage()));
		}

    }

    public function show($id)
    {
        $view['page_title'] = "DETAIL DATA ANGGOTA KOPERASI";
        $view['data'] = \App\Models\Member::findOrFail($id);
        
		return view('Web.detail', $view);
    }

    public function edit($id)
    {
        $view['page_title'] = "UBAH DATA ANGGOTA KOPERASI";
        $view['data'] = \App\Models\Member::findOrFail($id);
        
		return view('Web.edit', $view);
    }

    public function delete($id)
    {
        try {
			\DB::beginTransaction();

            $member = \App\Models\Member::find($id);

            $member->delete();

			\DB::commit();
			return back()->with('message', array('type'=>'success', 'msg'=>'Data Berhasil dihapus'));
		}
		catch(\Exception $e) {
			\DB::rollBack();
			return back()->with('message', array('type'=>'error', 'msg'=>'Data gagal dihapus. <b>Pesan Error :</b>'.$e->getMessage()));
		}
    }
}