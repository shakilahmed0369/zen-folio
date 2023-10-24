<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUpdateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $contact = Contact::first();
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactUpdateRequest $request, string $id)
    {
        Contact::updateOrCreate(
            ['id' => 1],
            [
                'email' => $request->email,
                'social' => $request->social,
                'address' => $request->address,
                'about' => $request->about
            ]
        );

        toastr()->success('Updated Successfully');

        return redirect()->back();
    }
}
