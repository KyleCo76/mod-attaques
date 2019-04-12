<?php
/**
* lang_main.php - Création du fichier de traduction en anglais
 * @package Attaques
 * @author Verité
 * @link http://www.ogsteam.fr
 * @version : 0.5h
 * @translation KyleCo76
 */

//L'appel direct est interdit
if (!defined('IN_SPYOGAME')) die("Hacking attempt");

//On vérifie que le mod est activé
$query = "SELECT `active` FROM `".TABLE_MOD."` WHERE `action`='attaques' AND `active`='1' LIMIT 1";
if (!$db->sql_numrows($db->sql_query($query))) die("Hacking attempt");

global $key;
$lang['MOD_ATTAQUES_STATS_HISTORIQUE_MOIS'] = "Monthly History";
$lang['TEST'] = "CHEESESES";
$lang['MOD_ATTAQUES_LOSS_MSG'] = "Losses are at ";
$lang['MOD_ATTAQUES_VICTORY_COORD'] = "Victory at ";
$lang['MOD_ATTAQUES_ATTACK_LIST'] = "List of victories for ";
$lang['MOD_ATTAQUES_AU'] = "to ";
$lang['MOD_ATTAQUES_RESOURCE_PIE'] = "Metal_x_Crystal_x_Deuterium_x_Losses";
$lang['MOD_ATTAQUES_GAINS_ATTAQUES'] = "Attack Gains";
$lang['MOD_ATTAQUES_GRAPHIQUE'] = "graphic";
$lang['MOD_ATTAQUES_GRAPHIQUE_DISPONIBLE'] = "No graph available";
$lang['MOD_ATTAQUES_RESULTATS_ATTAQUE'] = "Results of the attacks from ";
$lang['MOD_ATTAQUES_AFFICHER'] = "Display";
$lang['MOD_ATTAQUES_AFFICHER_ATTAQUES'] = "Show Attacks : ";
$lang['MOD_ATTAQUES_DU'] = "to ";
$lang['MOD_ATTAQUES_PARAMETRES_AFFICHAGE_ATTAQUES'] = "Attack Display Settings";
$lang['MOD_ATTAQUES_DELETE_WRONG_USER'] = "tried to delete an attack that belongs to another user in the attack management module ";
$lang['MOD_ATTAQUES_CANT_DELETE_ATTACK'] = "You do not have permission to delete this attack";
$lang['MOD_ATTAQUES_ATTAQUE_SUPPRIMEE'] = "The attack has been removed";
$lang['MOD_ATTAQUES_ATTAQUE_SUPPRIMEE'] = "The attack has been removed";
$lang['MOD_ATTAQUES_LOG_SUPPRIME'] = " removed one of it's attacks in the attack management panel";
$lang['MOD_ATTAQUES_DE'] = " of";
$lang['MOD_ATTAQUES_ATTAQUES'] = " attacks ";
$lang['MOD_ATTAQUES_COORDONNEES'] = "Coordinates";
$lang['MOD_ATTAQUES_DATE_ATTAQUE'] = "Attack Date";
$lang['MOD_ATTAQUES_METAL_GAGNE'] = "Metal Won";
$lang['MOD_ATTAQUES_CRISTAL_GAGNE'] = "Crystal Won";
$lang['MOD_ATTAQUES_DEUT_GAGNE'] = "Deuterium Won";
$lang['MOD_ATTAQUES_PERTES_ATTAQUANT'] = "Attacker Losses";
$lang['MOD_ATTAQUES_SUPPRIMER'] = "Remove";
$lang['MOD_ATTAQUES_HISTORIQUE_MOIS'] = "History of the Month";
$lang['MOD_ATTAQUES_QUANTITE'] = "Quantity";
$lang['MOD_ATTAQUES_DU_JOUR'] = "Today";
$lang['MOD_ATTAQUES_DE_LA_VEILLE'] = "Yesterday";
$lang['MOD_ATTAQUES_7_ERNIERS_JOURS'] = "Past 7 days";
$lang['MOD_ATTAQUES_DU_MOIS'] = "Past Month";
$lang['MOD_ATTAQUES_METAL'] = "Metal";
$lang['MOD_ATTAQUES_CRISTAL'] = "Crystal";
$lang['MOD_ATTAQUES_DEUT'] = "Deuterium";
$lang['MOD_ATTAQUES_GAINS'] = "Gains";
$lang['MOD_ATTAQUES_PERTES'] = "Losses";
$lang['MOD_ATTAQUES_RENTABILITE'] = "Profit";
$lang['MOD_ATTAQUES_SUPPRIME_MOIS'] = "Your attacks from the previous month (s) have been removed. Only earnings remain accessible in the Archives Space section <br> The list of your attacks that have just been removed can be consulted one last time. Remember to save it !!!";
$lang['MOD_ATTAQUES_LISTE_ATTAQUES_01'] = "List of your 01 attacks";
