<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Models\Modules;
use App\Models\NvScolaire;
use App\Models\User;

class AffectationController extends Controller
{
    public function show()
    {
        $user = User::all();
        $groupes = NvScolaire::all();
        $modules = Modules::all();

        return view('affectation.show',[
            'user' => $user,
            'groupes' => $groupes,
            'modules' => $modules
        ]);
    }

    public function index(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'users_id' => 'required|exists:users,id',
            'nv_scolaires_id' => 'required|exists:nv_scolaires,id',
            'modules_id' => 'required|array|min:1',
            'modules_id.*' => 'exists:modules,id'
        ]);

        // Get the input values
        $professeurId = $request->input('users_id');
        $groupeId = $request->input('nv_scolaires_id');
        $moduleIds = $request->input('modules_id');

        // Loop through selected modules and assign professor to each
        foreach ($moduleIds as $moduleId) {
            Affectation::create(attributes: [
                'users_id' => $professeurId,
                'nv_scolaires_id' => $groupeId,
                'modules_id' => $moduleId,
            ]);
        }

        return redirect()->back()->with('success', 'Le professeur a été affecté avec succès.');
    }
}
