<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
     public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'nullable|string|max:30',
            'country' => 'nullable|string|max:100',
            'product' => 'nullable|string|max:255',
            'quantity' => 'nullable|string|max:100',
            'message' => 'nullable|string',
        ]);

        Inquiry::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you. Your inquiry has been sent successfully.');
    }
}
