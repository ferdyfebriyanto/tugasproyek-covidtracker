<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        $paginate = News::orderBy('id', 'desc')->paginate(2);
        return view('admin.news', ['news' => $news, 'paginate' => $paginate]);
        
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_name = "";
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        News::create([
            'gambar' => $image_name,
            'judul' => $request->judul,
            'konten' => $request->konten,
            'kategori' => $request->kategori,
            'penulis' => $request->penulis,
        ]);

        return redirect()->route('admin.news.index')
            ->with('success', 'Berita Berhasil Ditambahkan');
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
        $news = News::find($id);

        return view('admin.news-edit', ['news' => $news]);
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
        $news = News::find($id);

        $news->judul = $request->judul;
        $news->konten = $request->konten;
        $news->kategori = $request->kategori;
        $news->penulis = $request->penulis;
        $news->updated_at = $request->updated_at;

        if ($news->gambar && file_exists(storage_path('app/public/' . $news->gambar))) {
            Storage::delete('public/' . $news->gambar);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $news->gambar = $image_name;

        $news->save();
        return redirect()->route('admin.news')
            ->with('success', 'Berita Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect()->route('admin.news.index')
            ->with('danger', 'Berita Berhasil Dihapus');
    }
}
