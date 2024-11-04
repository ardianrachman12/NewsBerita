<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayController extends Controller
{
    public function index()
    {
        return view('playground.index');
    }

    // public function downloadMp3(Request $request)
    // {
    //     $client = new \GuzzleHttp\Client();

    //     $id = $request->id;

    //     $response = $client->request('GET', 'https://youtube-mp3-download1.p.rapidapi.com/dl?id=' . $id, [
    //         'headers' => [
    //             'Content-Type' => 'application/json',
    //             'x-rapidapi-host' => 'youtube-mp3-download1.p.rapidapi.com',
    //             'x-rapidapi-key' => 'e88ff93c7fmsh740781e67c8eeccp1826c0jsnd01fe77bc88f',
    //         ],
    //     ]);
    //     // Kembalikan response dari API
    //     // return response()->json(json_decode($response->getBody(), true));
    //     $response = json_decode($response->getBody(), true);
    //     // dd($response['link']);  
    //     return view('playground.download', compact('response'));
    // }

    public function downloadMp3(Request $request)
    {
        // Fungsi untuk mengekstrak ID video YouTube dari URL
        function extractYouTubeId($url)
        {
            $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|(?:youtu\.be\/))([a-zA-Z0-9_-]{11})/';

            if (preg_match($pattern, $url, $matches)) {
                return $matches[1]; // Mengembalikan ID video
            }

            return null;
        }

        $client = new \GuzzleHttp\Client();

        // Ambil URL YouTube dari request dan ekstrak ID video
        $url = $request->input('url');
        $id = extractYouTubeId($url);

        // Periksa apakah ID valid
        if (!$id) {
            return redirect()->back()->with('error', 'Invalid YouTube URL', 400);
        }

        // Lakukan request ke API dengan ID video
        $response = $client->request('GET', 'https://youtube-mp3-download1.p.rapidapi.com/dl?id=' . $id, [
            'headers' => [
                'Content-Type' => 'application/json',
                'x-rapidapi-host' => 'youtube-mp3-download1.p.rapidapi.com',
                'x-rapidapi-key' => 'e88ff93c7fmsh740781e67c8eeccp1826c0jsnd01fe77bc88f',
            ],
        ]);

        // Decode response dari API
        $response = json_decode($response->getBody(), true);

        // Kembalikan view dengan response dari API
        return view('playground.download', compact('response'));
    }
}
