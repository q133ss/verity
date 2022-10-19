<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function make($id)
    {
        $contributor = Contributor::findOrFail($id);
        return view('certificate', compact('contributor'));
    }
}
