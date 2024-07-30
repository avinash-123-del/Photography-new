<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Setting extends Controller
{
    
    public function coming_soon()
    {
        return view('coming_soon');
    }
    
    public function profile()
    {
        return view('profile');
    }
    
    public function setting()
    {
        return view('setting');
    }
    public function destination()
    {
        return view('destination');
    }

    public function toor_package()
    {
        return view('toor_package');
    }


    public function toor_package_list()
    {
        return view('toor_package_list');
    }


    public function category()
    {
        return view('category'); 
    }

    public function banner()
    {
        return view('banner'); 
    }

    public function termscondition()
    {
        return view('termscondition'); 
    }

    public function privacypolicy()
    {
        return view('privacypolicy'); 
    }

    public function faqs()
    {
        return view('faqs'); 
    }

    public function testimonials()
    {
        return view('testimonials'); 
    }

    public function contact_enquiry()
    {
        return view('contact_enquiry'); 
    }

    public function complaints()
    {
        return view('complaints'); 
    }

    public function subcategory()
    {
        return view('subcategory');
    }


    public function customer()
    {
        return view('customer');
    }

    public function blocked_customer()
    {
        return view('blocked_customer');
    }

    public function add_new_customer()
    {
        return view('add_new_customer');
    }
    public function booking_list()
    {
        return view('booking.booking_list');
    }

    public function booking_cancelled()
    {
        return view('booking.booking_cancelled');
    }
    public function manual_booking()
    {
        return view('booking.manual_booking');
    }

    public function booking_detail()
    {
        return view('booking.booking_detail');
    }
    public function new_admin()
    {
        return view('new_admin');
    }
    public function manage_admin()
    {
        return view('manage_admin');
    }
    public function change_password()
    {
        return view('change_password');
    }

    public function transaction()
    {
        return view('transaction');
    }
}
