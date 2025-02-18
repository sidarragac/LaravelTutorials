<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
 
class HomeController extends Controller{
    public function index(): View{
        return view('home.index');
    }

    public function contact(): View{
        $name = "Santiago Idárraga Ceballos";
        $mail = "sic@myMail.com";
        $phone = "3314654582";
        $address = "Calle 123 #45-67";
        return view('home.contact')->with("name", $name)
            ->with("mail", $mail)
            ->with("phone", $phone)
            ->with("address", $address);
    }
}
?>