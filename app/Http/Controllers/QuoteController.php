<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',

            'company' => 'nullable|string|max:255',

            'country' => 'required|string|max:255',

            'email' => 'required|email|max:255',

            'product_requirement' => 'required|string|max:255',

            'quantity' => 'required|string|max:100',

            'preferred_length' => 'required|string|max:100',

            'destination' => 'required|string|max:255',

            'message' => 'nullable|string|max:2000',
        ]);

        Quote::create($validated);

        return redirect()
            ->back()
            ->with('quote_success', __('Thank you. Your inquiry has been received.'));
    }
}