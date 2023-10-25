<?php

namespace App\Http\Controllers;

use App\Models\Cawnavisita;
use Illuminate\Http\Request;

/**
 * Class CawnavisitaController
 * @package App\Http\Controllers
 */
class CawnavisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cawnavisitas = Cawnavisita::paginate(10);

        return view('cawnavisita.index', compact('cawnavisitas'))
            ->with('i', (request()->input('page', 1) - 1) * $cawnavisitas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cawnavisita = new Cawnavisita();
        return view('cawnavisita.create', compact('cawnavisita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cawnavisita::$rules);

        $cawnavisita = Cawnavisita::create($request->all());

        return redirect()->route('cawnavisitas.index')
            ->with('success', 'Cawnavisita created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cawnavisita = Cawnavisita::find($id);

        return view('cawnavisita.show', compact('cawnavisita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cawnavisita = Cawnavisita::find($id);

        return view('cawnavisita.edit', compact('cawnavisita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cawnavisita $cawnavisita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cawnavisita $cawnavisita)
    {
        request()->validate(Cawnavisita::$rules);

        $cawnavisita->update($request->all());

        return redirect()->route('cawnavisitas.index')
            ->with('success', 'Cawnavisita updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cawnavisita = Cawnavisita::find($id)->delete();

        return redirect()->route('cawnavisitas.index')
            ->with('success', 'Cawnavisita deleted successfully');
    }
}
