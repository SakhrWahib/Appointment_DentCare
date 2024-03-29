<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // عرض الصفحة
    public function index()
    {
        return view('contact');
    }

    // معالجة الطلبات لحفظ بيانات الاتصال
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect('home')->back()->with('success', 'تم إرسال رسالتك بنجاح! سنتواصل معك قريبًا.');
    }
}
