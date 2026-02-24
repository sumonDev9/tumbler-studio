<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Brand;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Database theke real-time data fetch kora hoche
        $total_messages = Contact::count();
        $unread_messages = Contact::where('is_read', false)->count();
        $total_teams = Team::count();
        $total_testimonials = Testimonial::count();
        $total_brands = Brand::count();
        $recent_messages = Contact::latest()->take(5)->get();

        // Variable gulo compact kore view-te pathano hoche
        return view('vendor.admin-panel.dashboard.index', compact(
            'total_messages', 
            'unread_messages', 
            'total_teams', 
            'total_testimonials', 
            'total_brands', 
            'recent_messages'
        ));
    }
}