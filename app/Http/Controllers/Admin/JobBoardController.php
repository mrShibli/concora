<?php

namespace App\Http\Controllers\Admin;

use App\Models\JobPosition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class JobBoardController extends Controller
{
    public function index()
    {
        $positions = JobPosition::orderBy('created_at', 'desc')->get();
        return view('layouts.admin.job-position.index', compact('positions'));
    }

    public function create()
    {
        return view('layouts.admin.job-position.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|string|max:255',
        ]);

        $jobPosition = new JobPosition();

        $jobPosition->title = $request->title;
        $jobPosition->status = $request->has('status') ? 1 : 0; // Assigning the status based on checkbox state
        $jobPosition->rider = $request->has('rider') ? 1 : 0; // Assigning the status based on checkbox state

        $jobPosition->save();

        // Redirect back to the index page with a success message
        return redirect()->route('job_positions.index')->with('success', 'Job position created successfully.');
    }

    public function edit($id)
    {
        // Find the job position by ID
        $jobPosition = JobPosition::findOrFail($id);
        // Return the edit view with the job position data
        return view('layouts.admin.job-position.edit', compact('jobPosition'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
        ]);

        // Find the JobPosition record by its ID
        $jobPosition = JobPosition::findOrFail($id);

        // Update the fields with the new values from the request
        $jobPosition->title = $request->title;
        $jobPosition->status = $request->has('status') ? 1 : 0; // Assigning the status based on checkbox state

        // Save the changes to the database
        $jobPosition->save();

        // Redirect back to the index page with a success message
        return redirect()->route('job_positions.index')->with('success', 'Job position updated successfully.');
    }

    public function destroy($id)
    {
        // Find the job position by ID and delete it
        $jobPosition = JobPosition::findOrFail($id);
        $jobPosition->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('job_positions.index')->with('success', 'Job position deleted successfully.');
    }
}
