<?php

//LOCATION: remax/public/search

class AgentController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function show_listings($id)
    {
    
    $houses = House::with('images')->where('agent_id', '=', $id)->get();
    return View::make('search.results')->with(compact('houses'));

    }

 


   
}