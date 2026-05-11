<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\Company;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
    {
        $internships = Internship::with('company')->get();

        return view('internships.index', compact('internships'));
    }

    public function create()
    {
        $companies = Company::all();

        return view('internships.create', compact('companies'));
    }

    public function store(Request $request)
    {
        Internship::create($request->all());

        return redirect('/internships');
    }

    public function destroy($id)
{
    Internship::find($id)->delete();

    return redirect('/internships');
}
}