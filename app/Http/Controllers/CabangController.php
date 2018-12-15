<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabang;
use Session;
use Alert;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabang = Cabang::all();
        return view('cabang.index',compact('cabang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data Successfully Saved','Good Job')->autoclose(2000);
        $this->validate($request,[
            'kode_cabang' => 'required|unique:cabangs',
            'nama_cabang' => 'required|',
            'uang_makan' => 'required|'
        ]);
        $cabang = new Cabang;
        $cabang->kode_cabang = $request->kode_cabang;
        $cabang->nama_cabang = $request->nama_cabang;
        $cabang->uang_makan = $request->uang_makan;
        $cabang->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$cabang->nama_cabang</b>"
        ]);
        return redirect()->route('cabang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cabang = Cabang::findOrFail($id);
        return view('cabang.edit',compact('cabang'));
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
        Alert::success('Data Successfully Changed','Good Job')->autoclose(2000);
        $this->validate($request,[
            'kode_cabang' => 'required|',
            'nama_cabang' => 'required|',
            'uang_makan' => 'required|'
        ]);

        $cabang = Cabang::findOrFail($id);
        $cabang->kode_cabang = $request->kode_cabang;
        $cabang->nama_cabang = $request->nama_cabang;
        $cabang->uang_makan = $request->uang_makan;
        $cabang->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$cabang->nama_cabang</b>"
        ]);
        return redirect()->route('cabang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::error('Data Successfully Deleted','Good Job')->autoclose(2000);
        $cabang = Cabang::findOrFail($id);
        $cabang->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('cabang.index');
    }
}
