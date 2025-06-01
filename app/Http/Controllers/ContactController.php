<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Message::all();
        return view('admin.message.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $store = Message::create($validate);

        if ($store) {
            return redirect()->route('landingPage', '#contact')->with('success', 'Message send successfully.');
        } else {
            return redirect()->route('landingPage', '#contact')->with('error', 'Message not send (service error).');
        }
    }

    public function show($id)
    {
        $data = Message::where('id', $id)->first();
        return view('admin.message.show', compact('data'));
    }
}
