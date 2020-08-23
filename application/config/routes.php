<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['sign-up'] = 'Sign_up';
$route['a-propos'] = 'A_propos';
$route['cours/(:any)'] = 'Cours/index/$1';
$route['activite/(:any)'] = 'CM2/chapitre/$1';
$route['profil/(:any)'] = 'CM2/profil/$1';
$route['dashboard/ajout-des-cours'] = 'ckeditor/CKeditorController';
$route['dashboard/ajout-des-cours/ajout'] = 'ckeditor/CKeditorController/ajoutCours';
$route['mon-compte'] = 'MonCompte';
$route['dashboard'] = 'admin/Dashboard';
$route['dashboard/cours'] = 'admin/Dashboard/voirLesCours';
$route['dashboard/utilisateur'] = 'admin/Dashboard/users';  
$route['dashboard/professeurs'] = 'admin/Dashboard/prof';
$route['dashboard/professeurs'] = 'admin/Dashboard/prof';  
$route['dashboard/ajouter-des-professeurs'] = 'admin/Dashboard/AjouterDesProfesseurs';
$route['od-admin'] = 'admin/Login_admin';
$route['deconnexion'] = 'admin/Login_admin/deconnexion';
$route['CM2/(:any)'] = 'CM2/domaine/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
