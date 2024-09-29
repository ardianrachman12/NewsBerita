<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class PortalController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

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
        // Tentukan jumlah item per halaman
        $perPage = 4;

        // Dapatkan halaman saat ini atau default ke 1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Tentukan data yang akan ditampilkan pada halaman saat ini
        $currentItems = array_slice($categorypath, ($currentPage - 1) * $perPage, $perPage);

        // Buat instance dari LengthAwarePaginator
        $paginatedItems = new LengthAwarePaginator(
            $currentItems, // The items for the current page
            count($categorypath), // Total items
            $perPage, // Items per page
            $currentPage, // Current page
            ['path' => request()->url(), 'query' => request()->query()] // The path for the pagination links
        );

        return view('portal.vendor-one', ['categorypath' => $paginatedItems]);
        // dd($categorypath[2]);
        // return view('portal.vendor-one', compact('categorypath'));
    }
    public function vendorTwo()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/');
        //endpoint 0 untuk cnn news
        $data = $response->json()['endpoints'][2]['paths'];
        $i = 0;
        $categorypath = [];
        foreach ($data as $key) {
            $urlpath = $key['path'];
            $category = Http::get($urlpath);
            $categorypath[$i] = $category->json();
            $i++;
        }
        // dd($categorypath[2]);
        return view('portal.vendor-two', compact('categorypath'));
    }
    public function vendorThree()
    {
        try {
            $response = Http::get('https://api-berita-indonesia.vercel.app/');

            // Cek apakah response tidak null dan status code 200
            if ($response->failed() || is_null($response->json())) {
                throw new \Exception('Gagal mengakses API utama.');
            }

            // endpoint 2 untuk antara news
            $data = $response->json()['endpoints'][3]['paths'];

            $categorypath = [];
            $i = 0;

            foreach ($data as $key) {
                $urlpath = $key['path'];
                $category = Http::get($urlpath);

                // Cek apakah setiap response tidak null dan status code 200
                if ($category->failed() || is_null($category->json())) {
                    throw new \Exception('Gagal mengakses endpoint: ' . $urlpath);
                }

                $categorypath[$i] = $category->json();
                $i++;
            }

            return view('portal.vendor-three', compact('categorypath'));
        } catch (\Exception $e) {
            // Redirect ke halaman home dengan pesan error
            return redirect('/')->with('error', $e->getMessage());
        }
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
