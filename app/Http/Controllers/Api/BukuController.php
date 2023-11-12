<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::orderBy('id', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data buku berhasil diambil',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataBuku = new Buku;

        $dataBuku->judul = $request->judul;
        $dataBuku->pengarang = $request->pengarang;
        $dataBuku->tanggal_publikasi = $request->tanggal_publikasi;

        // create validator dataBuku
        $validator = Validator($request->all(), [
            'judul' => ['required'],
            'pengarang' => ['required'],
            'tanggal_publikasi' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menyimpan data buku',
                'errors' => $validator->errors()
            ], 400);
        }

        $post = $dataBuku->save();
        if ($post) {
            return response()->json([
                'status' => true,
                'message' => 'Data buku berhasil disimpan',
                'data' => $dataBuku
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menyimpan data buku',
            ], 409);
        }
        // $dataBuku->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Buku::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Detail data buku berhasil diambil',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data buku tidak ditemukan',
            ]);
        }
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
        $dataBuku = Buku::find($id);
        if (empty($dataBuku)) {
            return response()->json([
                'status' => false,
                'message' => 'Data buku tidak ditemukan',
            ]);
        }

        $dataBuku->judul = $request->judul;
        $dataBuku->pengarang = $request->pengarang;
        $dataBuku->tanggal_publikasi = $request->tanggal_publikasi;

        // create validator dataBuku
        $validator = Validator($request->all(), [
            'judul' => ['required'],
            'pengarang' => ['required'],
            'tanggal_publikasi' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal update data buku',
                'errors' => $validator->errors()
            ], 400);
        }

        $post = $dataBuku->save();
        if ($post) {
            return response()->json([
                'status' => true,
                'message' => 'Data buku berhasil diupdate',
                'data' => $dataBuku
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal update data buku',
            ], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataBuku = Buku::find($id);
        if (empty($dataBuku)) {
            return response()->json([
                'status' => false,
                'message' => 'Data buku tidak ditemukan',
            ]);
        }

        $post = $dataBuku->delete();
        if ($post) {
            return response()->json([
                'status' => true,
                'message' => 'Data buku berhasil dihapus',
                'data' => $dataBuku
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menghapus data buku',
            ], 409);
        }
    }
}
