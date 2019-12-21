<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Part;

class MainController extends Controller
{
    public function main()
    {
      return view('pages.main');
    }
    public function one()
    {
      return view('pages.one');
    }
    public function two()
    {
      return view('pages.two');
    }
    public function three()
    {
      return view('pages.three');
    }
    public function four()
    {
      return view('pages.four');
    }
    public function five()
    {
      return view('pages.five');
    }
    public function six()
    {
      return view('pages.six');
    }
    public function seven()
    {
      return view('pages.seven');
    }
    public function wel()
    {
      return view('welcome');
    }
    public function faq()
    {
      $faq = Faq::latest()
        ->get();
      return view('pages.faq', compact('faq'));
    }
    public function fransh()
    {
      $part = Part::latest()
        ->get();
      return view('pages.fransh', compact('part'));
    }
    public function contact()
    {
      return view('pages.contact');
    }
    public function eat()
    {
      return view('pages.eat');
    }
    public function eat2()
    {
      return view('pages.eat2');
    }
    public function mainmess(Request $request)
      {   
      $data= array(
      'name_text' => request('name_text'),
      'email' => request('email'),
      'textarea' => request('textarea'),
      );
       \Mail::send('email.emai1', $data, function($message) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_EVENTSOLO');
        $message->from($data['email'], $data['name_text'], $data['textarea']);
        $message->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     session()->flash('message', 'Ваша заявка отправлена!');
     return redirect('/');
    }
    public function mainmess2(Request $request)
      {   
      $data= array(
      'email' => request('email'),
      'phone' => request('phone'),
      'city' => request('city'),
      'name_text' => request('name_text'),
      );
      $url = URL::action('https://h.albato.ru/h/38/asKnBuf81YOFbSfMf35sVeu0hPWmmY9n1SDPcLWJQSY%253D');
      \Mail::send('email.emai2', $data, function($message) use ($data)
    {
        $mail_admin = URL::action('https://h.albato.ru/h/38/asKnBuf81YOFbSfMf35sVeu0hPWmmY9n1SDPcLWJQSY%253D');;
        $message->from($data['email'], $data['city'], $data['phone'], $data['name_text']);
        $message->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      
        
     session()->flash('message', 'Ваша заявка отправлена!');
     return redirect('/');
    }
    
}
