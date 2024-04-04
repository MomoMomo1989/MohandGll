@extends('layouts.client')
@section('main')
    {{-- @if ($errors->any())
    <div class="Cerrors">
    @foreach ($errors->all() as $error)
     
        <ul>
            <li>{{ $error }}</li>
       </ul>    
      
    @endforeach
     </div>   
    @endif --}}
    <form method="POST" action="{{ route('storeC') }}" class="Conteneur_Gen_Rese1">
    <div  class="form_Profil">
        @csrf
        <div class="posit1">
        <label for="">Nom et Prénom</label>
        <input type="text" name="nom_prenom" id="">
        <label for="">N° C.Iddentité</label>
        <input type="text" name="n_c_i" id="">
        <label for="">N° I.National</label>
        <input type="text" name="i_d_n" id="">
        <label for="">Code diréction </label>
         <select name="code_dir">
            <option value="">DG</option>
         </select>
        </div>
        <div class="posit1">

             <label for="">N° Passeport </label>
             <input type="text" name="n_passport" id=""> 
             <label for="">Valide du</label>
             <input type="Date" name="valide_du" id="">
             <label for="">Valide au</label>
             <input type="Date" name="valide_au" id="">
             <label for="">N° Téléphone </label>
             <input type="text" name="tel" id="">

        </div>
        
    </div>
   <button type="submit" class="btn_frm_ND1">Sauvegarder</button>
 </form>


@endsection