<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PortalController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function vendorTwo()
    {
        try {
            $response = Http::get('https://api-berita-indonesia.vercel.app/');
            if ($response->failed() || is_null($response->json())) {
                throw new \Exception('Gagal mengakses API utama.');
            }
            $category = $response->json()['endpoints'][0]['paths'];
            $vendor = "CNN";
            return view('portal.vendor', ['category' => $category, 'vendor' => $vendor]);
        } catch (\Exception $e) {
            // Redirect ke halaman home dengan pesan error
            return redirect('/')->with('error', $e->getMessage());
        }
    }
    public function vendorOne()
    {
        try {
            $response = Http::get('https://api-berita-indonesia.vercel.app/');
            if ($response->failed() || is_null($response->json())) {
                throw new \Exception('Gagal mengakses API utama.');
            }
            $category = $response->json()['endpoints'][7]['paths'];
            $vendor = "Republika";
            return view('portal.vendor', ['category' => $category, 'vendor' => $vendor]);
        } catch (\Exception $e) {
            // Redirect ke halaman home dengan pesan error
            return redirect('/')->with('error', $e->getMessage());
        }
    }
    public function vendorThree()
    {
         try {
            $response = Http::get('https://api-berita-indonesia.vercel.app/');
            if ($response->failed() || is_null($response->json())) {
                throw new \Exception('Gagal mengakses API utama.');
            }
            $category = $response->json()['endpoints'][2]['paths'];
            $vendor = "JPNN";
            return view('portal.vendor', ['category' => $category, 'vendor' => $vendor]);
        } catch (\Exception $e) {
            // Redirect ke halaman home dengan pesan error
            return redirect('/')->with('error', $e->getMessage());
        }
    }

    public function kumparan_terbaru()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/kumparan/terbaru/');
        $category = $response->json();
        return view('portal.news', compact('category'));
    }

    // vendor one
    public function cnn_terbaru()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/terbaru/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_teknologi()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/teknologi/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_olahraga()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/olahraga/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_politik()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/politik/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_humaniora()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/humaniora/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_hukum()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/hukum/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_ekonomi()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/ekonomi/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_bola()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/bola/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_lifestyle()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/lifestyle/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_hiburan()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/hiburan/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_dunia()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/dunia/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_otomotif()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/otomotif/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }

    // vendor two
    public function republika_terbaru()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/republika/terbaru/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function republika_news()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/republika/news/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function republika_daerah()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/republika/daerah/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
}
