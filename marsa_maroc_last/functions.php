
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


function add_student($DESIGNATION, $FAMILLE, $SOUSFAMILLE,$MARQUE,$TYPE,$DATE_MISE_EN_SERVICE,$picture="logo.png",$dispon)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("insert into equipement (DESIGNATION,FAMILLE,SOUSFAMILLE,MARQUE,TYPE,DATE_MISE_EN_SERVICE,picture,DISPONIBILITES) values (?,?,?,?,?,?,?,?)");
        $rp->execute([ $DESIGNATION, $FAMILLE, $SOUSFAMILLE,$MARQUE,$TYPE,$DATE_MISE_EN_SERVICE,$picture,$dispon]);
    } catch (PDOException $e) {
        echo ("Error adding equipement " . $e->getMessage());
    }
}


function delete_student($CODEEQUI)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("delete from equipement where CODEEQUI=?");
        $rp->execute([$CODEEQUI]);
    } catch (PDOException $e) {
        echo ("Impossible de supprimer un équipement  " . $e->getMessage());
    }
}

function edit_student($DESIGNATION, $FAMILLE, $SOUSFAMILLE, $MARQUE, $TYPE, $DATE_MISE_EN_SERVICE, $CODEEQUI,$dispon)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("update equipement set DESIGNATION=?, FAMILLE=?, SOUSFAMILLE=?, MARQUE=?, TYPE=?, DATE_MISE_EN_SERVICE=? ,DISPONIBILITES=? where CODEEQUI=?");
        $rp->execute([$DESIGNATION, $FAMILLE, $SOUSFAMILLE, $MARQUE, $TYPE, $DATE_MISE_EN_SERVICE, $CODEEQUI,$dispon]);
    } catch (PDOException $e) {
        echo ("échec de la modification  " . $e->getMessage());
    }
}
function read()
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from equipement");
        $rp->execute([]);
        $resultat = $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        echo ("equipement selection error   " . $e->getMessage());
    }
}


function find($CODEEQUI)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from equipement where CODEEQUI=?");
        $rp->execute([$CODEEQUI]);
        $resultat = $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        echo ("Student selection error " . $e->getMessage());
    }
}

function rechecher($MARQUE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from equipement where MARQUE like ? ");
        $rp->execute(["%$MARQUE%"]);
        $resultat = $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        echo ("equipement selection error  " . $e->getMessage());
    }
}



function uploader($infosFichier)
{
    $nom=time().$infosFichier['name'];
    $tmp=$infosFichier['tmp_name'];
    move_uploaded_file($tmp,"uploads/$nom");
    return "uploads/$nom";
}


