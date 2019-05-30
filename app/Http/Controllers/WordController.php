<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Word::paginate(10);
        return view('words.index', ['words' => $words]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('words.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'word' => 'max:191',
          'meaning' => 'max:191',
          'example' => 'max:191',
        ]);

        $word = new Word;
        $word->word = $request->word;
        $word->meaning = $request->meaning;
        $word->example = $request->example;
        $word->save();
        return redirect('words/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        return view('words.show', ['word' => $word]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $word)
    {
        return view('words.edit', ['word' => $word]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $word)
    {
        $this->validate($request, [
          'word' => 'max:191',
          'meaning' => 'max:191',
          'example' => 'max:191',
        ]);

        $word->word = $request->word;
        $word->meaning = $request->meaning;
        $word->example = $request->example;
        $word->save();
        return redirect('words/' . $word->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        $word->delete();
        return redirect('words');
    }
}
