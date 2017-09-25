<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{

    public function send(Request $request){
     $listeDesObjets= [  1=>'réservation',
                         2=>'renseignement Sandwiches',
                         3=>'renseignement Plats à emporter',
                         4=>'renseignement Buffets',
                         5=>'Autres'
                     ];

    $object=$listeDesObjets[$request['object']];
    Mail::send(['emails.contact','emails.contactTexte'],[ 'clientName'=>$request['nom'],
                                            'clientEmail'=>$request['email'],
                                            'leText'=>$request['leMessage']],
        function($message) use ($request,$object){
        $message->to('info@qualitytraiteur.be')->subject($object);
        $message->from('messagerie@qualitytraiteur.be','Formulaire de contact');
        });
    return view('emails.responseContact');
    }
}
