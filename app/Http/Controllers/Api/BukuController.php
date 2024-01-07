<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    public function index()
    {
        try {
            $data = Buku::orderBy('id', 'asc')->get();
            // if count
            if ($data->count() > 0) {
                $formattedData = $data->map(function ($buku) {
                    return [
                        'id' => $buku->id,
                        'judul' => $buku->judul,
                        'pengarang' => $buku->pengarang,
                        'tanggal_publikasi' => Carbon::parse($buku->tanggal_publikasi)->format('Y-m-d'),
                        'created_at' => Carbon::parse($buku->created_at)->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::parse($buku->updated_at)->format('Y-m-d H:i:s'),
                    ];
                });

                return response()->json([
                    'status' => true,
                    'message' => 'Data buku berhasil diambil',
                    'data' => $formattedData,
                ], 200);
            }
        } catch (\exception $e) {
            return response()->json([
                'status' => false,
                "message" => "Data gagal diambil",
                "errors" => $e->getMessage(),
            ], 401);
        }
    }

    public function store(Request $request)
    {
        try {
            // create validator dataBuku
            $validator = Validator::make($request->all(), [
                'judul' => ['required'],
                'pengarang' => ['required'],
                'tanggal_publikasi' => ['required', 'date_format:Y-m-d'],
            ], [
                'tanggal_publikasi.date_format' => 'Format tanggal publikasi harus seperti: Y-m-d (contoh: 2008-09-01)',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal menyimpan data buku',
                    'errors' => $validator->errors(),
                ], 400);
            }

            $dataBuku = new Buku;

            $dataBuku->judul = $request->judul;
            $dataBuku->pengarang = $request->pengarang;

            // Menggunakan Carbon untuk memastikan format tanggal_publikasi sesuai
            $dataBuku->tanggal_publikasi = Carbon::parse($request->tanggal_publikasi)->format('Y-m-d');

            $post = $dataBuku->save();

            if ($post) {
                return response()->json([
                    'status' => true,
                    'message' => 'Data buku berhasil disimpan',
                    'data' => [
                        'judul' => $dataBuku->judul,
                        'pengarang' => $dataBuku->pengarang,
                        'tanggal_publikasi' => $dataBuku->tanggal_publikasi,
                        'id' => $dataBuku->id,
                    ],
                ], 201);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Gagal menyimpan data buku',
                ], 409);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Server Error!', 'error' => $e], 500);
        }
    }
    // $dataBuku->save();

    public function show($id)
    {
        $data = Buku::find($id);

        if ($data) {
            // Memformat tanggal_publikasi, created_at, dan updated_at menggunakan Carbon
            $formattedData = [
                'id' => $data->id,
                'judul' => $data->judul,
                'pengarang' => $data->pengarang,
                'tanggal_publikasi' => Carbon::parse($data->tanggal_publikasi)->format('Y-m-d'),
                'created_at' => Carbon::parse($data->created_at)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::parse($data->updated_at)->format('Y-m-d H:i:s'),
            ];

            return response()->json([
                'status' => true,
                'message' => 'Detail data buku berhasil diambil',
                'data' => $formattedData,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data buku tidak ditemukan',
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $dataBuku = Buku::find($id);

        if (empty($dataBuku)) {
            return response()->json([
                'status' => false,
                'message' => 'Data buku tidak ditemukan',
            ], 404);
        }

        // create validator dataBuku
        $validator = Validator::make($request->all(), [
            'judul' => ['required'],
            'pengarang' => ['required'],
            'tanggal_publikasi' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal update data buku',
                'errors' => $validator->errors(),
            ], 400);
        }

        $dataBuku->judul = $request->judul;
        $dataBuku->pengarang = $request->pengarang;
        $dataBuku->tanggal_publikasi = $request->tanggal_publikasi;

        $post = $dataBuku->save();

        if ($post) {
            // Memformat tanggal_publikasi, created_at, dan updated_at menggunakan Carbon
            $formattedData = [
                'id' => $dataBuku->id,
                'judul' => $dataBuku->judul,
                'pengarang' => $dataBuku->pengarang,
                'tanggal_publikasi' => Carbon::parse($dataBuku->tanggal_publikasi)->format('Y-m-d'),
                'created_at' => Carbon::parse($dataBuku->created_at)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::parse($dataBuku->updated_at)->format('Y-m-d H:i:s'),
            ];

            return response()->json([
                'status' => true,
                'message' => 'Data buku berhasil diupdate',
                'data' => $formattedData,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal update data buku',
            ], 409);
        }
    }

    public function destroy($id)
    {
        $dataBuku = Buku::find($id);

        if (empty($dataBuku)) {
            return response()->json([
                'status' => false,
                'message' => 'Data buku tidak ditemukan',
            ], 404);
        }

        $deletedAt = Carbon::now(); // Waktu setelah penghapusan

        $post = $dataBuku->delete();

        if ($post) {
            // Panggil event BukuDeleted setelah penghapusan data
            // event(new BukuDeleted);
            return response()->json([
                'status' => true,
                'message' => 'Data buku berhasil dihapus',
                'deleted_at' => $deletedAt->format('Y-m-d H:i:s'), // Format tanggal dan waktu
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menghapus data buku',
            ], 409);
        }
    }
}
