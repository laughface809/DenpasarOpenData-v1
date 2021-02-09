<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formulir;
use App\Post;
use Illuminate\Http\Response;

class formulircontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      return view('formulir');
    }

    public function analisis()
    {
        $posts = Post::with('author')->where('category_id', '1')->orderBy('created_at', 'desc')->simplepaginate(6);
        return view('analisis', compact('posts'));
    }

    public function show($slug)
    {
      $post = Post::findBySlug($slug);
      return view ('detail', compact('post'));
    }

    public function infografis()
    {
        $posts = Post::with('author')->where('category_id', '2')->orderBy('created_at', 'desc')->simplepaginate(3);
        return view('infografis', compact('posts'));
    }

    public function tampilkan($category_id)
    {
      $post = Post::findByCategory($category_id);
      return view ('detail', compact('post'));
    }

    public function visits()
    {
      return visits($this);
      $post = Post::find(1);
      $post->visits()->increment();
      $post->visits()->count();
      return view('visits', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'idsekolah' => 'required',
          'namasekolah' => 'required',
          'namakepalasekolah' => 'required',
          'alamatsekolah' => 'required',
          'jumlahmurid' => 'required',
          'jumlahguru' => 'required',
          '$$
          ' => 'required',
        ]);

        $emps = new formulir;

        $emps->id = $request->input('');
        $emps->nama = $request->input('');
        $emps->perangkat_daerah = $request->input('');
        $emps->pangkat = $request->input('');
        $emps->jabatan = $request->input('');
        $emps->NIP = $request->input('');
        $emps->NIK = $request->input('');
        $emps->foto_ktp = $request->input('');
        $emps->created_at = $request->input('');
        $emps->updated_at = $request->input('');

        $emps->idsekolah = $request->input('idsekolah');
        $emps->namasekolah = $request->input('namasekolah');
        $emps->namakepalasekolah = $request->input('namakepalasekolah');
        $emps->alamatsekolah = $request->input('alamatsekolah');
        $emps->jumlahmurid = $request->input('jumlahmurid');
        $emps->jumlahguru = $request->input('jumlahguru');
        $emps->tanggalberdiri = $request->input('tanggalberdiri');



        $emps->save();

        return redirect('/selesai')->with('success', 'Terima Kasih.. data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $req)
    {
        formulir::where('id',$req->perangkat_daerah)
        ->update(['nama'=>$req->nama,'pangkat'=>$req->pangkat,'jabatan'=>$req->jabatan,'NIP'=>$req->NIP,'NIK'=>$req->NIK]);
        return redirect('/selesai')->with('success', 'Terima Kasih.. data tersimpan');
    }

    public function update2(Request $req)
    {
        formulir::where('id',$req->idsekolah)
        ->update(['namasekolah'=>$req->namasekolah,'namakepalasekolah'=>$req->namakepalasekolah,'alamatsekolah'=>$req->alamatsekolah,'jumlahmurid'=>$req->jumlahmurid,'jumlahguru'=>$req->jumlahguru,'tanggalberdiri'=>$req->tanggalberdiri]);
        return redirect('/selesai')->with('success', 'Terima Kasih.. data tersimpan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
