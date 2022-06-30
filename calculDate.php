
<?php
    if (file_exists('index.php')) {
    if (isset ($_POST['calcul'])) {  
    $name= $_POST ['prenom'];
    $birthDay= $_POST ['jourAnniv'];
    $birthMonth= $_POST ['moisAnniv'];
    $actualYear = date ('Y');
    $next_birth = mktime(0, 0, 0, $birthMonth, $birthDay, $actualYear);
    $today = time();
    $diff_days = ($next_birth - $today);
    $days= ($diff_days/86400);
    $days= $days < 0 ? ceil ($days) + 365 : ceil ($days);
    // $d1 += ($d2 > 1 AND date('L', strtotime('+ 1 year')) == 1) ? 366 : 365; 
    $resultat = ', votre anniversaire est dans ' .$days. ' jours.';
    $name = $name == '' ? 'Cher visiteur' : $name;
    }    
}  
?>
