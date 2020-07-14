<?php

namespace App\Http\Controllers;

/**
 * Class AssignmentController
 * @package App\Http\Controllers
 */
class AssignmentController extends Controller
{
    /**
     * Show the First Assignment view
     *
     * @return Response
     */
    public function firstAssignment()
    {
        return view('assignments.assignment1');
    }

    /**
     * Show the Second Assignment view
     *
     * @return Response
     */
    public function secondAssignment()
    {
        return view('assignments.assignment2');
    }

    /**
     * Show the Second Assignment view
     *
     * @return Response
     */
    public function thirdAssignment()
    {
        return view('assignments.assignment3');
    }
}
