<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name'          => 'required|string|max:255',
                'start_date'    => 'required|date',
                'end_date'      => 'nullable|date',
                'status'        => 'required',
                'value'         => 'required',
                'creator'       => 'required',
            ]);
            $create = Project::create($validatedData);

            return response()->json(['message' => 'Project created successfully'], 200);

        } catch (\Throwable $th) {
            return $th;
            return response()->json(['message' => 'Bad request'], 400);
        }
    }

    public function getAll() {
        try {
            return Project::get();

        } catch (\Throwable $th) {
            return response()->json(['message' => $th], 400);
        }
        
    }

    public function getById($id) {
        try {

            $project = Project::findOrFail($id);
            return $project;

        } catch (\Throwable $th) {
            return response()->json(['message' => $th], 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $projeto->update($request->all());
    
            $project = Project::update([
                'title' => $request->title,
                'description' => $request->description,
            ])->where('id', $id);
    
            return response()->json($project, 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th], 400);
        }
    }

    public function delete(Request $request, $id)
    {
        try {

            $project = Project::findOrFail($id);

            $project->delete();

            return response()->json(['message' => 'Project deleted successfully'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'not found'], 404);
        }
    }
}
