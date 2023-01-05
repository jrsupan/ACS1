<?php

namespace App\Http\Controllers;
use App\Schoolyear;
use Illuminate\Http\Request;

class SchoolyearController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $schoolyears = Schoolyear::orderBy('description')->paginate(15);

        return view('schoolyear.index')->withSchoolyears($schoolyears);
    }

    public function create()
    {
        return view('schoolyear.create');
    }

    public function store(Request $request)
    {
        $schoolyear = new Schoolyear();
        
        $schoolyear->description = $request->description;

        $schoolyear->save();

        return redirect()->route('schoolyear.show', [$schoolyear->id]);
    }

    public function show(Schoolyear $schoolyear)
    {
        return view('schoolyear.show')->withSchoolyear($schoolyear);
    }

    public function edit(Schoolyear $schoolyear)
    {
        return view('schoolyear.edit')->withSchoolyear($schoolyear);
    }

    public function update(Request $request, Schoolyear $schoolyear)
    {
        $schoolyear->description = $request->description;

        $schoolyear->save();

        return redirect()->route('schoolyear.show', [$schoolyear->id]);
    }

    public function destroy(Schoolyear $schoolyear)
    {
        $schoolyear->delete();

        return redirect()->route('schoolyear.index');
    }
}
