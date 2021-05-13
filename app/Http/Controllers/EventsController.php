<?php

namespace App\Http\Controllers;


class EventsController extends Controller
{

    public function event1()
    {
        return view('news.ces-events');
    }
    public function event2()
    {
        return view('news.AVITA-launches-stylish-ADMIROR-notebooks');
    }
    public function event3()
    {
        return view('news.Hong-Kong-tech-innovator-Nexstgo-returns-to-COMPUTEX-2019_final');
    }
    public function event4()
    {
        return view('news.ces-events-2020');
    }
        public function event5()
    {
        return view('news.avita-appoints-ingram-micro');
    }


    
}
