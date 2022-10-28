
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


function add_student($DESIGNATION, $FAMILLE, $CAUSE,$SYMPTHOME,$TYPE,$REMEDE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("insert into panne (DESIGNATION,FAMILLE,CAUSE,SYMPTHOME,TYPE,REMEDE) values (?,?,?,?,?,?)");
        $rp->execute([$DESIGNATION, $FAMILLE, $CAUSE,$SYMPTHOME,$TYPE,$REMEDE]);
    } catch (PDOException $e) {
        echo ("Error adding student " . $e->getMessage());
    }
}


function delete_student($CODEPANNE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("delete from panne where CODEPANNE=?");
        $rp->execute([$CODEPANNE]);
    } catch (PDOException $e) {
        echo ("Unable to remove a student  " . $e->getMessage());
    }
}

function edit_student($DESIGNATION, $FAMILLE, $CAUSE, $SYMPTHOME, $TYPE, $REMEDE, $CODEPANNE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("update panne set DESIGNATION=?, FAMILLE=?, CAUSE=?, SYMPTHOME=?, TYPE=?, REMEDE=? where CODEPANNE=?");
        $rp->execute([$DESIGNATION, $FAMILLE, $CAUSE, $SYMPTHOME, $TYPE, $REMEDE, $CODEPANNE]);
    } catch (PDOException $e) {
        echo ("edit failed  " . $e->getMessage());
    }
}
function read()
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from panne");
        $rp->execute([]);
        $resultat = $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        echo ("Student selection error   " . $e->getMessage());
    }
}


function find($CODEPANNE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from panne where CODEPANNE=?");
        $rp->execute([$CODEPANNE]);
        $resultat = $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        echo ("Student selection error " . $e->getMessage());
    }
}

function rechecher($DESIGNATION)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from panne where DESIGNATION like ? ");
        $rp->execute(["%$DESIGNATION%"]);
        $resultat = $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        echo ("Student selection error  " . $e->getMessage());
    }
}





