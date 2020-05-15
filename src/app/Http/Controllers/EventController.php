<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function highest_bid_price()
    {
        $bids = DB::table('bids')->select('name')->orderBy('price', 'desc')
            ->limit(1)
            ->get();
        foreach ($bids as $bid) {
            echo $bid->name;
//            $result =  view('welcome', compact('bid'));
        }
//        return $result;
    }

    public function events_for_which_there_are_no_applications()
    {
        $events = DB::table('events')->leftJoin('bids', 'bids.id_event', '=', 'events.id' )
            ->where('bids.id_event', null)
            ->get();
        foreach ($events as $event) {
            echo "<pre>";
            echo ($event->caption);
        }
    }

    public function events_for_which_more_than_three_applications()
    {
        $events = DB::table('events')->leftjoin('bids', 'bids.id_event', '=', 'events.id' )
            ->select('events.caption', DB::raw('SUM(bids.id_event) as events_more'))
            ->groupBy('events.caption')
            ->havingRaw('events_more > 3')
            ->get();
        foreach ($events as $event) {
            echo "<pre>";
            echo $event->caption;
        }
    }

    public function events_for_which_the_most_applications()
    {
        $events = DB::table('events')->leftjoin('bids', 'bids.id_event', '=', 'events.id' )
            ->select('events.caption', DB::raw('SUM(bids.id_event) as events_more'))
            ->groupBy('events.caption')
            ->orderBy('events_more', 'desc')->limit(1)
            ->get();
        foreach ($events as $event) {
            echo "<pre>";
            echo $event->caption;
        }
    }
}
