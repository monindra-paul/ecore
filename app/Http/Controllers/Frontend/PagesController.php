<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class PagesController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function postContact(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'subject' => 'required',
            'problem' => 'required'
        ]);

        // $contact = new Contact;
        // $contact -> name = $request['name'];
        // $contact -> email = $request['email'];
        // $contact -> subject = $request['subject'];
        // $contact -> query = $request['query'];
        // $contact -> save();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'problem' => $request->problem,
        ];

        $createData = Contact::insert($data);

        if ($createData) {
            return redirect()->back()->with('success', 'Thanks for contacting us.We will connect you shortly');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }



    public function faq()
    {
        return view('frontend.pages.faq');
    }




    public function privacy()
    {
        return view('frontend.pages.privacy');
    }


    public function terms()
    {
        return view('frontend.pages.tc');
    }
}
