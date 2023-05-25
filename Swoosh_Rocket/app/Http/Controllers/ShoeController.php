<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormReqeust;
use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shoes = Shoe::all();

        return view('shoe.index', compact('shoes'));
        return view('shoe.index', ['shoes' => $shoes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shoe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormReqeust $request)
    {
        $shoe = Shoe::create([
            'title' =>$request->title,
            'price' =>$request->price,
            'size' =>$request->size,
            'style' =>$request->style,
            'colorway' =>$request->colorway,
            'cover' =>$request->file('cover')->store('public/covers'),
        ]);
        
        return redirect(route('shop'))->with('shoeCreated', "Hai aggiunto con successo la scarpa \"{$shoe->title}\" ");
    }

    /**
     * Display the specified resource.
     */
    public function show(Shoe $shoe)
    {
        return view('shoe.show', compact('shoe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shoe $shoe)
    {
        return view('shoe.edit', compact('shoe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shoe $shoe)
    {
        $shoe->update([
            'title' =>$request->title,
            'price' =>$request->price,
            'size' =>$request->size,
            'style' =>$request->style,
            'colorway' =>$request->colorway,
        ]);

        if ($request->cover) {
            $shoe->update([
                'cover' =>$request->file('cover')->store('public/covers'),
            ]);
        }

        return redirect(route('shop'))->with('shoeUpdated', "Hai aggiornato con successo la scarpa \"{$shoe->title}\" ");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shoe $shoe)
    {
        $shoe->delete();
        return redirect(route('shop'))->with('shoeDestroyed', "Hai cancellato con successo la scarpa  \"{$shoe->title}\" " );
    }
}
