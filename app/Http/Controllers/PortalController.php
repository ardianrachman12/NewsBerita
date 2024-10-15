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
            $vendor = "Antara";
            // dd($category);
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
            $category = $response->json()['endpoints'][3]['paths'];
            $vendor = "JPNN";
            return view('portal.vendor', ['category' => $category, 'vendor' => $vendor]);
        } catch (\Exception $e) {
            // Redirect ke halaman home dengan pesan error
            return redirect('/')->with('error', $e->getMessage());
        }
    }
    public function vendorFour()
    {
        try {
            $response = Http::get('https://api-berita-indonesia.vercel.app/');
            if ($response->failed() || is_null($response->json())) {
                throw new \Exception('Gagal mengakses API utama.');
            }
            $category = $response->json()['endpoints'][4]['paths'];
            $vendor = "Kumparan";
            return view('portal.vendor', ['category' => $category, 'vendor' => $vendor]);
        } catch (\Exception $e) {
            // Redirect ke halaman home dengan pesan error
            return redirect('/')->with('error', $e->getMessage());
        }
    }
    public function vendorFive()
    {
        try {
            $response = Http::get('https://api-berita-indonesia.vercel.app/');
            if ($response->failed() || is_null($response->json())) {
                throw new \Exception('Gagal mengakses API utama.');
            }
            $category = $response->json()['endpoints'][2]['paths'];
            $vendor = "CNN";
            return view('portal.vendor', ['category' => $category, 'vendor' => $vendor]);
        } catch (\Exception $e) {
            // Redirect ke halaman home dengan pesan error
            return redirect('/')->with('error', $e->getMessage());
        }
    }
    public function vendorSix()
    {
        try {
            $response = Http::get('https://api-berita-indonesia.vercel.app/');
            if ($response->failed() || is_null($response->json())) {
                throw new \Exception('Gagal mengakses API utama.');
            }
            $category = $response->json()['endpoints'][1]['paths'];
            $vendor = "CNBC";
            return view('portal.vendor', ['category' => $category, 'vendor' => $vendor]);
        } catch (\Exception $e) {
            // Redirect ke halaman home dengan pesan error
            return redirect('/')->with('error', $e->getMessage());
        }
    }
    public function vendorSeven()
    {
        try {
            $response = Http::get('https://api-berita-indonesia.vercel.app/');
            if ($response->failed() || is_null($response->json())) {
                throw new \Exception('Gagal mengakses API utama.');
            }
            $category = $response->json()['endpoints'][8]['paths'];
            $vendor = "Sindo";
            return view('portal.vendor', ['category' => $category, 'vendor' => $vendor]);
        } catch (\Exception $e) {
            // Redirect ke halaman home dengan pesan error
            return redirect('/')->with('error', $e->getMessage());
        }
    }

    // vendor four
    public function kumparan_terbaru()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/kumparan/terbaru/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }

    // vendor one
    public function antara_terbaru()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/terbaru/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_tekno()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/tekno/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_olahraga()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/olahraga/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_politik()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/politik/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_humaniora()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/humaniora/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_hukum()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/hukum/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_ekonomi()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/ekonomi/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_bola()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/bola/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_lifestyle()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/lifestyle/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_hiburan()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/hiburan/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_dunia()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/dunia/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function antara_otomotif()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/antara/otomotif/');
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
    public function republika_khazanah()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/republika/khazanah/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function republika_islam()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/republika/islam/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function republika_bola()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/republika/bola/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function republika_internasional()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/republika/internasional/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function republika_leisure()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/republika/leisure/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }

    // vendor three
    public function jpnn_terbaru()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/jpnn/terbaru/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }

    // vendor five
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
    public function cnn_nasional()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/nasional/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnn_internasional()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/internasional/');
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
    public function cnn_gayaHidup()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnn/gayaHidup/');
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

    // vendor six
    public function cnbc_terbaru()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/terbaru/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnbc_investment()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/investment/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnbc_news()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/news/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnbc_market()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/market/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnbc_entrepreneur()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/entrepreneur/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnbc_syariah()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/syariah/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnbc_tech()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/tech/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnbc_lifestyle()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/lifestyle/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnbc_opini()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/opini/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function cnbc_profil()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/cnbc/profil/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    
    // vendor seven
    public function sindonews_terbaru()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/terbaru/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_nasional()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/nasional/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_metro()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/metro/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_ekbis()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/ekbis/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_international()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/international/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_daerah()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/daerah/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_sports()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/sports/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_otomotif()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/otomotif/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_tekno()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/tekno/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_sains()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/sains/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_edukasi()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/edukasi/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_lifestyle()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/lifestyle/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    public function sindonews_kalam()
    {
        $response = Http::get('https://api-berita-indonesia.vercel.app/sindonews/kalam/');
        $category = $response->json();
        if (isset($category['success']) && $category['success'] === false) {
            // Redirect back dengan flash message
            return redirect()->back()->with('error', $category['message']);
        }
        return view('portal.news', compact('category'));
    }
    
}
