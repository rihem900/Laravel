<?php

namespace App\Http\Controllers;
use App\User;
use App\Postes;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postes = auth()->user()->postes;

        $all = Postes::all();


        return view ('postes.index',compact('postes',$postes))->with('all',$all);
    }
    

    public function create()
    {

        return view('postes.create');
    }



    public function store(Request $request)
    {
        //validating and making sure USer data is confrom
        $attributes = $this->validatePoste();
        
        //creqting an instance of the class and updating the database
       $poste = Postes::create($attributes+['user_id'=>auth()->user()->id]);

       return redirect('/home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postes  $postes
     * @return \Illuminate\Http\Response
     */
    public function show(Postes $posts)
    {

       // $this->authorize('update',posts);
        dd($posts->id);
        return view('postes.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postes  $postes
     * @return \Illuminate\Http\Response
     */
    public function edit(Postes $postes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postes  $postes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postes $postes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postes  $postes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postes $postes)
    {
        //
    }

    public function validatePoste(){

        return $attributes = request()->validate([
            'title' =>['required', 'min:5', 'max:255'],
            'message' =>['required', 'min:3', 'max:255' ],
            'privacy'=> ['required'],
        ]);
    }
}
