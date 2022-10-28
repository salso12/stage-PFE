
<?php

function data()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=itsup_marsa', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $dbh;
    } catch (PDOException $e) {
        die("Connection failed " . $e->getMessage());
    }
}


function add_student($MATRICULE_T,$OBJET,$DATE_ORDRE,$appv)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("insert into ordre_reparation (MATRICULE_T,OBJET,DATE_ORDRE,APPROUVER) values (?,?,?,?)");
        $rp->execute([$MATRICULE_T, $OBJET,$DATE_ORDRE,$appv]);
    } catch (PDOException $e) {
        echo ("Error adding ordre " . $e->getMessage());
    }
}


function delete_student($CODEORDRE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("delete from ordre_reparation where CODEORDRE=?");
        $rp->execute([$CODEORDRE]);
    } catch (PDOException $e) {
        echo ("Unable to remove a ordre  " . $e->getMessage());
    }
}

function edit_student($MATRICULE_T, $OBJET,$DATE_ORDRE,$CODEORDRE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("update ordre_reparation set MATRICULE_T=?, OBJET=?, DATE_ORDRE=? where CODEORDRE=?");
        $rp->execute([$MATRICULE_T, $OBJET,$DATE_ORDRE,$CODEORDRE]);
    } catch (PDOException $e) {
        echo ("edit failed  " . $e->getMessage());
    }
}
function read()
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from ordre_reparation");
        $rp->execute([]);
        $resultat = $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        echo ("ordre selection error   " . $e->getMessage());
    }
}


function find($CODEORDRE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from ordre_reparation where CODEORDRE=?");
        $rp->execute([$CODEORDRE]);
        $resultat = $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        echo ("ordre selection error " . $e->getMessage());
    }
}

function rechecher($DEMANDEUR)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from ordre_reparation where DEMANDEUR like ? ");
        $rp->execute(["%$DEMANDEUR%"]);
        $resultat = $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        echo ("ordre selection error  " . $e->getMessage());
    }
}



// function uploader($infosFichier)
// {
//     $nom=time().$infosFichier['name'];
//     $tmp=$infosFichier['tmp_name'];
//     move_uploaded_file($tmp,"uploads/$nom");
//     return "uploads/$nom";
// }


