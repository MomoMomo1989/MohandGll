<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\profile;
use Illuminate\Http\Request;
class ProfilEditController extends Controller
{
    public function editionP(){
        return view('app_Client/profile_edit');
    }
    public function storeClient(Request $request){
        $nom_prenom = $request->nom_prenom;
        $n_c_i = $request->n_c_i;
        $i_d_n = $request->i_d_n;
        $n_passport = $request->n_passport;
        $valide_du = $request->valide_du;
        $valide_au = $request->valide_au; 
        $tel = $request->tel;
        $code_dir = $request->code_dir;
        $user_id = Auth::id();
        // dd($request);
        // $request->validate([
        //     'nom_prenom'=>'required',
        //     'n_c_i'=>'required',
        //     'i_d_n'=>'required',
        //     'tel'=>'required',
        //     'code_dir'=>'required',
        // ]
        // ,[
         
        //     'nom_prenom.required'=>'Nom et Prénom REQUIS',
        //     'n_c_i.required'=>'N° Carte.I REQUIS',
        //     'i_d_n.required'=>'N° Identification National REQUIS',
        //     'tel.required'=>'N° Telephone REQUIS',
        //     'code_dir.required'=>'code direction REQUIS',
        // ]
    // );
        profile::create([
            'nom_prenom' => $nom_prenom,
            'n_c_i' => $n_c_i,
            'i_d_n' => $i_d_n,
            'n_passport' => $n_passport,
            'valide_du' => $valide_du,
            'valide_au' => $valide_au,
            'tel' => $tel,
            'code_dir' => $code_dir,
            'user_id' => $user_id,
        ]);
        return redirect()->route('homeTB');
    }
}
