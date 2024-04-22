<?php

namespace App\Http\Controllers;
use App\Models\reservation;
use App\Models\profile;
use Auth;
use Illuminate\Http\Request;
use App\Support\Collection ;
class TraitementDemende extends Controller
{
    public function traitement_d(Request $request){
    $profile = profile::where('user_id', Auth::id())->get();
       $profil = profile::where('user_id', Auth::id())->get()->first()->id;
       $request = reservation::where('profiles_id',$profil)
       ->Paginate(3);
       
        return view('app_Client/traitement_demande',[
            'Demandes' => $request,
            // 'profiles' => $profile->nom_prenom,
            // dd($profile->nom_prenom)
        ]);
    }
    public function affichage_TB_C(Request $request){
        
        $profile = profile::where('user_id', Auth::id())->get()->first()->id;
        $request = reservation::where('profiles_id',$profile)->Paginate(2);
        $valide = reservation::where('profiles_id',$profile)
        ->where('etat_reserv','Validé')
        ->count();
        $annule = reservation::where('profiles_id',$profile)
        ->where('etat_reserv','Annulé')
        ->count();
        $Enattente = reservation::where('profiles_id',$profile)
        ->where('etat_reserv','En attente')
        ->count();
        return view('app_Client/homeClient',[
            'reservation_ps' => $request,
            'etat_reserv_v' => $valide,
            'etat_reserv_a' => $annule,
            'etat_reserv_att' => $Enattente,
            'des_types' => ['Total','Validé','Annulé','En attente'],
        ]);
    }
    public function destroy_demande($id){
        $demande = reservation::find($id);
        $demande->delete();
        return redirect('/T_B')->with('status','la reservation a ete supprimer');
    }
    public function modif_dem(Request $request,$id){
        $reservation = reservation::find($id);
        $reservation->orientation = $request->input('orientation');
        $reservation->pays = $request->input('pays');
        $reservation->v_dep = $request->input('v_dep');
        $reservation->v_retour = $request->input('v_retour');
        $reservation->date_dep = $request->input('date_dep');
        $reservation->date_retour = $request->input('date_retour');
        $reservation->obs = $request->input('obs');
        $reservation->update();
        return redirect('/T_B')->with('status','la reservation a ete modifier avec succes');
    }
}
