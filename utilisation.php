<?php

$calendar = ics_to_array('Calendrier_Scolaire_Zones_A_B_C-2.ics');

function ics_to_array($str_ics){
  $ics = file_get_contents($str_ics);
  
  $arr_event = explode('BEGIN:VEVENT', $ics);
  $events = array('calendar' => array(), 'events' => array());
  
  foreach ($arr_event as $ke => $e) {
    $oneevent = array();
    $adata = explode("\n", $e);
    $curkey = null;
    foreach ($adata as $idx => $d) {
      if (trim($d) == '') continue;
      // si le premier caractère est une majuscule, création d'un nouvel élément (gestion éléments multilignes)
      if (ctype_upper(substr($d,0,1))) {
        $kv = explode(':', $d, 2);
        $curkey = $kv[0];
        $oneevent[$curkey] = isset($kv[1]) ? $kv[1] : null;
      } else { // sinon, concaténation avec la clef courante
        $oneevent[$curkey] .= trim($d);
      }
    }
    if($ke == 0) { // Le premier élément décrit le calendrier
      $events['calendar'] = $oneevent;
    } else { // Les éléments suivants décrivent les évènements
      $events['events'][] = $oneevent;
    }
    
  }
  return $events;
}
