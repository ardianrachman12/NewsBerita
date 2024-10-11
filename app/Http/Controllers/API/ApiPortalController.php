<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiPortalController extends Controller
{
    public function vendorOne()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/');
        //endpoint 7 untuk republika news
        $data = $response->json()['endpoints'][7]['paths'];
        $i = 0;
        $categorypath = [];
        foreach ($data as $key) {
            $urlpath = $key['path'];
            $category = Http::get($urlpath);
            $categorypath[$i] = $category->json();
            $i++;
        }
        // dd($categorypath[2]);
        $responseResult = [
            'result' => ['data' => $data, 'categorypath' => $categorypath]
        ];
        return $responseResult;
    }

    public function getTikTokTags(Request $request)
    {
        // Dapatkan query dari request, dengan default 'music' jika tidak ada input
        $query = $request->input('query');

        try {
            // Mengirim request ke API menggunakan Laravel HTTP Client
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => 'e88ff93c7fmsh740781e67c8eeccp1826c0jsnd01fe77bc88f',
                'Accept' => 'application/json',
            ])->get('https://tags-generator.p.rapidapi.com/youtubeTags/' . $query);

            // Mengecek apakah response sukses
            if ($response->successful()) {
                // Kembalikan response JSON
                return response()->json($response->json());
            } else {
                // Kembalikan response error jika request gagal
                return response()->json([
                    'error' => 'Request failed',
                    'message' => $response->body(),
                ], $response->status());
            }
        } catch (\Exception $e) {
            // Jika terjadi exception, kembalikan pesan error
            return response()->json([
                'error' => 'Request failed',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function downloadVideo(Request $request)
    {
        // $youtubeUrl = $request->input('url');

        // try {
        //     // Mengirim request ke API menggunakan Laravel HTTP Client
        //     $response = Http::withHeaders([
        //         'Content-Type' => 'application/json',
        //         'x-rapidapi-host' => 'tags-generator.p.rapidapi.com',
        //         'x-rapidapi-key' => 'e88ff93c7fmsh740781e67c8eeccp1826c0jsnd01fe77bc88f',
        //     ])->post('https://tags-generator.p.rapidapi.com/youtube/download?url='. urlencode($youtubeUrl), [
        //         'key1' => 'value',
        //         'key2' => 'value',
        //     ]);

        //     // Mengecek apakah response sukses
        //     if ($response->successful()) {
        //         // Kembalikan response JSON
        //         return response()->json($response->json());
        //     } else {
        //         // Kembalikan response error jika request gagal
        //         return response()->json([
        //             'error' => 'Request failed',
        //             'message' => $response->body(),
        //         ], $response->status());
        //     }
        // } catch (\Exception $e) {
        //     // Jika terjadi exception, kembalikan pesan error
        //     return response()->json([
        //         'error' => 'Request failed',
        //         'message' => $e->getMessage(),
        //     ], 500);
        // }


        $youtubeUrl = $request->input('url');

        if (!$youtubeUrl) {
            return response()->json([
                'error' => 'Request failed',
                'message' => 'URL is required',
            ], 400);
        }

        // Encode URL agar format URL aman
        $encodedUrl = urlencode($youtubeUrl);

        try {
            // Inisialisasi Guzzle Client
            $client = new \GuzzleHttp\Client();

            // Kirim request ke API
            $response = $client->request('POST', 'https://tags-generator.p.rapidapi.com/youtube/download?url=' . $encodedUrl, [
                'body' => '{"key1":"value","key2":"value"}',
                'headers' => [
                    'Content-Type' => 'application/json',
                    'x-rapidapi-host' => 'tags-generator.p.rapidapi.com',
                    'x-rapidapi-key' => 'e88ff93c7fmsh740781e67c8eeccp1826c0jsnd01fe77bc88f',
                ],
            ]);

            // Kembalikan response dari API
            return response()->json(json_decode($response->getBody(), true));
        } catch (\Exception $e) {
            // Jika ada error, kembalikan pesan error
            return response()->json([
                'error' => 'Request failed',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function vendorFour(){
        $response = Http::get('https://api-berita-indonesia.vercel.app/kumparan/terbaru/');
        $data = $response->json();
        return response()->json($data);
    }
    
    public function game()
    {
        $baseUrl = "https://api.gamestoreindonesia.com/v1/order/prepare/MOBILE_LEGENDS";

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->get($baseUrl, [
            'userId' => '122761840',
            'zoneId' => '2610',
        ]);

        if ($response->successful()) {
            $responseData = $response->json();
            $responseData['userId'] = '122761840'; // Masukkan userId ke dalam respons JSON
            $responseData['zoneId'] = '2610'; // Masukkan zoneId ke dalam respons JSON
            return $responseData;
        } else {
            return response()->json(['error' => 'Account not found'], $response->status());
        }
    }
}
