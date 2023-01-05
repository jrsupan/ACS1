<?php

namespace App\Http\Controllers;
use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $levels = Level::orderBy('description')->paginate(15);

        return view('level.index')->withLevels($levels);
    }

    public function create()
    {
        return view('level.create');
    }

    public function store(Request $request)
    {
        $level = new Level();

        $level->description = $request->description;

        $level->save();

        return redirect()->route('level.show', [$level->id]);
    }

    public function show(Level $level)
    {
        return view('level.show')->withLevel($level);
    }

    public function edit(Level $level)
    {
        return view('level.edit')->withLevel($level);
    }

    public function update(Request $request, Level $level)
    {
        $level->description = $request->description;

        $level->save();

        return redirect()->route('level.show', [$level->id]);
    }

    public function destroy(Level $level)
    {
        $level->delete();

        return redirect()->route('level.index');
    }
}
