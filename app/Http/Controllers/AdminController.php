<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class AdminController extends Controller
{
    public function index() {
        $tests = Test::all();
        return view('admin.tests.index', compact('tests'));
    }

    public function startTest($testId) {
        $test = Test::find($testId);
        if ($test && !$test->is_active) {
            $test->is_active = true;
            $test->save();
            return redirect()->route('admin.tests.index')->with('success', 'Test started successfully');
        }
        return redirect()->route('admin.tests.index')->with('error', 'Unable to start test');
    }

    public function stopTest($testId) {
        $test = Test::find($testId);
        if ($test && $test->is_active) {
            $test->is_active = false;
            $test->save();
            return redirect()->route('admin.tests.index')->with('success', 'Test stopped successfully');
        }
        return redirect()->route('admin.tests.index')->with('error', 'Unable to stop test');
    }
}
