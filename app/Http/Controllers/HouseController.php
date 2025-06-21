<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CarousalImage;
use App\Models\Contact;
use App\Models\Contactform;
use App\Models\Contactform2;
use App\Models\Gallery;
use App\Models\GButton;
use App\Models\GCard;
use App\Models\Home;
use App\Models\Map;
use App\Models\Modal1;
use App\Models\Modal2;
use App\Models\News;
use App\Models\NewsCard;
use App\Models\SCard;
use App\Models\SHeading;
use App\Models\Stats;
use App\Models\Stats2;
use App\Models\TCard;
use App\Models\Team;
use App\Models\Video;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index(){
        $home = Home::all();
        $about = About::all();
        $sheading = SHeading::all();
        $scard = SCard::all();
        $crud = Video::all();
        $modal1 = Modal1::all();
        $modal2 = Modal2::all();
        $team = Team::all();
        $tcard = TCard::all();
        $gallery = Gallery::all();
        $gbutton = GButton::all();
        $gcard = GCard::all();
        $carousalimage = CarousalImage::all();
        $stats = Stats::all();
        $stats2 = Stats2::all();
        $news = News::all();
        $newscard = NewsCard::all();
        $contact = Contact::all();
        $contactform = Contactform::all();
        $contactform2 = Contactform2::all();
        $map = Map::all();
        return view('House.Home' ,compact('home','about','sheading','scard','crud','modal1','modal2','team','tcard','gallery','gbutton','gcard','carousalimage','stats','stats2','news','newscard','contact','contactform','contactform2','map'));
    }
}
