<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Course::all(), 200);
    }

    // Create a new course
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'instructor' => 'required|string|max:255',
        ]);

        $course = Course::create($validatedData);

        return response()->json($course, 201);
    }

    // Return a single course by ID
    public function show($id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        return response()->json($course, 200);
    }

    // Fully update an existing course
    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
        ]);

        $course->update($validatedData);

        return response()->json($course, 200);
    }

    // Partially update an existing course
    public function patch(Request $request, $id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        // 'sometimes' rule allows the field to be missing from the request entirely, 
        // but if it is present, it must pass the validation rules
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string',
            'instructor' => 'sometimes|required|string|max:255',
        ]);

        $course->update($validatedData);

        return response()->json($course, 200);
    }

    // Delete a single course
    public function destroy($id)
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $course->delete();

        return response()->json(['message' => 'Course deleted successfully'], 200);
    }

    // Truncate the table / delete all courses
    public function destroyAll()
    {
        Course::truncate();

        return response()->json(['message' => 'All courses deleted successfully'], 200);
    }
}
