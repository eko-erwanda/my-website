<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Social;
use App\Message;
use App\Paket;
use App\Newsletter;
use App\Client;
use App\Recrutment;
use App\Skill;
use App\Team;
use App\Portofolio;
use App\Service;
use App\Home;
use App\Words;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\NewsletterRequest;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
	public function index()
	{
        $contact = Contact::all();
        $social = Social::all();
        $paket = Paket::all();
        $client = Client::all();
        $skill = Skill::all();
        $recrutment = Recrutment::all();
        $team = Team::all();
        $portofolio = Portofolio::all();
        $service = Service::all();
        $home = Home::all();
        $words = Words::all();
		return view('theme.layout',compact('contact','social','paket','client','recrutment','skill','team','portofolio','service','home','words'));
	}

    public function postMessage(MessageRequest $request)
    {    
    	$data = $request->All();
        $message = Message::create($data);

        return redirect('/')->with('message', 'visible');
    }

    public function postNewsletter(NewsletterRequest $request)
    {
        $data = $request->All();
        $news = Newsletter::create($data);

        return redirect()->route('main');
    }
}
