<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
class FooterController extends Controller
{
	public function getAboutUs(){
		return view('screen.footer.about_us');
	}
   	public function getAddContact(){
		return view('screen.footer.contact');
	}
    public function postAddContact(Request $req){
    	$this->validate($req,
    		[
    			'name'=>'required',
    			'company'=>'required',
    			'phone'=>'required',
    			'email'=>'required',
    			'content'=>'required'

    		],
    		[
    			'name.required'=>'Name is not empty',
    			'company.required'=>'Name is not empty',
    			'phone.required'=>'Phone is not empty',
    			'email.required'=>'Email is not empty',
    			'content.required'=>'Content is not empty'
    		]);
    	$contact = new Contact;
    	$contact->fullname = $req->name;
    	$contact->company = $req->company;
    	$contact->phone = $req->phone;
    	$contact->email = $req->email;
    	$contact->content = $req->content;
    	$contact->save();
    	return redirect('contact')->with('notify','Add Contact is sucessfully');
    }
    public function postAddContactOffline(Request $req){
    	$this->validate($req,
    		[
    			'name'=>'required',
    			'phone'=>'required',
    			'email'=>'required',
    			'content'=>'required'

    		],
    		[
    			'name.required'=>'Name is not empty',
    			'phone.required'=>'Phone is not empty',
    			'email.required'=>'Email is not empty',
    			'content.required'=>'Content is not empty'
    		]);
    	$contact = new Contact;
    	$contact->fullname = $req->name;
    	$contact->phone = $req->phone;
    	$contact->email = $req->email;
    	$contact->content = $req->content;
    	$contact->save();
    	return back()->with('notify1','Add Contact is sucessfully');
    }
    public function getTermOfServices(){
		return view('screen.footer.terms_of_service');
	}
	public function getPrivacyPolicy(){
		return view('screen.footer.privacy_policy');
	}
	public function getOperationRegulation(){
		return view('screen.footer.operation_regulation');
	}
	public function getResolveComplaints(){
		return view('screen.footer.resolve_complaints');
	}
}
