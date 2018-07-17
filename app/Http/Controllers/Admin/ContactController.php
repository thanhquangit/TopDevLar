<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
class ContactController extends Controller
{
    public function getListContact(){
    	$contact = Contact::all();
    	return view('admin.contact.list_contact', compact('contact'));
    }
}
