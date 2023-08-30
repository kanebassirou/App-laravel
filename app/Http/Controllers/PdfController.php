<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\emaille;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Models\User; // Assurez-vous d'importer le modèle User ou le modèle que vous utilisez pour les utilisateurs


class PdfController extends Controller
{
    //
    public function index()
    {
        $users = User::all(); // Récupérer tous les utilisateurs depuis la base de données
    
        foreach ($users as $user) {
            $data['email'] = $user->email;
            $data['title'] = 'from Bassirou';
            $data['body'] = 'This test exemple';
    
            $pdf = PDF::loadview('emails.contacts', $data);
            $data['pdf'] = $pdf;
    
            Mail::to($data['email'])->send(new Emaille($data)); // Envoyer l'e-mail à chaque utilisateur
    
            // Vous pouvez retirer cette ligne si vous ne souhaitez pas voir le message à chaque itération
            // dd('mail avec succès');
        }
        return 'Emails envoyés avec succès';
    }
}    
