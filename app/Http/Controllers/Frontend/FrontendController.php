<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Client;
use App\Models\ContactUs;
use App\Models\Footer;
use App\Models\LayananCategory;
use App\Models\MySkill;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FrontendController extends Controller
{
    public function index()
    {
        $getAbout = About::all()->first();
        $getClients = Client::all();
        $getBanner = Banner::all()->first();
        $getSkills = MySkill::all();
        $footer = Footer::all()->first();
        $getTesti = Testimonial::all();
        return view('frontend.home', compact('getAbout', 'getClients', 'getBanner', 'getSkills', 'footer','getTesti'));
    }
    public function contactUs()
    {
        $footer = Footer::all()->first();
        return view('frontend.pages.contact.contact', compact('footer'));
    }
    public function storeContactUs(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $validatedData = $request->all();
        $validatedData['name'] = strip_tags($validatedData['name']);
        $validatedData['email'] = strip_tags($validatedData['email']);
        $validatedData['subject'] = strip_tags($validatedData['subject']);
        $validatedData['message'] = strip_tags($validatedData['message']);

        $lastMessage = ContactUs::where('email', $validatedData['email'])
            ->where('created_at', '>', Carbon::now()->subMinute())
            ->count();

        if ($lastMessage >= 5) {
            return redirect()->route('beranda')->with('error', 'Anda telah mencapai batasan pengiriman pesan.');
        }

        ContactUs::create($validatedData);

        return redirect()->route('beranda')->with('success', 'Pesan berhasil dikirim!');
        // toast('Your Message has been submited!','success');
        // return redirect()->back();
        // return view('frontend.pages.contact.contact');
    }
    public function portfolio()
    {
        $footer = Footer::all()->first();
        $getPorto = Portfolio::all();
        $getCategories = PortfolioCategory::with('portfolios')->get();
        return view('frontend.pages.portfolio.portfolio', compact('footer', 'getPorto', 'getCategories'));
    }
    public function services()
    {
        $footer = Footer::all()->first();
        $getService = LayananCategory::with('layanans')->get();
        return view('frontend.pages.services.services', compact('footer', 'getService'));
    }
    public function getApi()
    {
        $footer = Footer::all()->first();
        return view('frontend.pages.api.api', compact('footer'));
    }
}
