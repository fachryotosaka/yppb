<?php

namespace App\Http\Controllers\LandingPage;

use Carbon\Carbon;
use App\Models\Gallery;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class LandingPageController extends Controller
{
    public function index(){
        $activities = Activity::orderBy("created_at","desc")->take(2)->get();
        $type_menu = "home";
        return view("pages.home.index",compact("activities","type_menu"));
    }

    public function gallery(){
        $gallery = Gallery::orderBy("created_at","desc")->paginate(10);
        $activities = Activity::orderBy("created_at","desc")->paginate(10);
        $type_menu = "gallery";
        return view("pages.home.gallery",compact("activities","type_menu","gallery"));
    }
    public function lembaga(){
        $type_menu = "lembaga";
        return view("pages.home.lembaga", compact('type_menu'));
    }
    public function management(){
        $type_menu = "management";
        return view("pages.home.management", compact('type_menu'));
    }
    public function legal(){
        $type_menu = "legal";
        return view("pages.home.legal", compact('type_menu'));
    }
    public function about(){
        $activities = Activity::orderBy("created_at","desc")->paginate(10);
        $type_menu = "about";
        return view("pages.home.about",compact("activities","type_menu"));
    }
    public function contact(){
        $activities = Activity::orderBy("created_at","desc")->paginate(10);
        $type_menu = "contact";
        return view("pages.home.contact",compact("activities","type_menu"));
    }
    public function program(){
        $activities = Activity::orderBy("created_at","desc")->get();
        $type_menu = "program";
        $createdAt = "no data";

        if ($activities->isNotEmpty()) {
            foreach ($activities as $activity) {
                $createdAt = Carbon::parse($activity->created_at)->isoFormat('MMMM D, YYYY');
                // Lakukan apa pun yang perlu dilakukan dengan $createdAt di sini
            }
        }


        return view("pages.home.program",compact("activities","type_menu","createdAt"));
    }
    public function single($slug){
        $activities = Activity::where('slug', $slug)->firstOrFail();
        $text = $activities->desc;
        $wrappedText = $this->separateTextIntoLines($text);
        $type_menu = "single";
        $descLength = strlen($activities->desc);
        if ($descLength > 15) {
            $trimmedDesc = substr($activities->desc, 0, 15);
            $lastSpacePos = strrpos($trimmedDesc, ' ');
            $trimmedDesc = substr($trimmedDesc, 0, $lastSpacePos);
            $trimmedWrap = $this->separateTextIntoLines($trimmedDesc);
        } else {
            $trimmedDesc = $activities->desc;
            $trimmedWrap = $this->separateTextIntoLines($trimmedDesc);
        }

        // Dapatkan tag dari post saat ini
        $currentPostTags = $activities->tags()->pluck('tags.id');

        $relatedPosts = Activity::whereHas('tags', function($query) use ($currentPostTags) {
            $query->whereIn('tags.id', $currentPostTags);
        })
        ->where('activities.id', '!=', $activities->id) // Gunakan 'activities.id' untuk membedakan dengan 'id' dari tabel tags
        ->orderBy('activities.created_at', 'desc') // Gunakan 'activities.created_at' untuk membedakan dengan 'created_at' dari tabel tags
        ->take(5)
        ->get();

        // Mengubah format created_at pada setiap post
        $createdAt = Carbon::parse($activities->created_at)->isoFormat('MMMM D, YYYY');

        return view("pages.home.detail",compact("activities","type_menu","wrappedText","trimmedWrap","relatedPosts","createdAt"));
    }

    private function separateTextIntoLines($text) {
        $sentences = preg_split('/(?<=[.?!])\s+(?=[a-zA-Z0-9])/', $text);
        $numSentences = count($sentences);
        $result = '';
        for ($i = 0; $i < $numSentences; $i++) {
            $result .= $sentences[$i] . ' ';

            if (($i + 1) % 7 == 0) {
                $result .= "<br><br>";
            }
        }

        return $result;
    }
}
