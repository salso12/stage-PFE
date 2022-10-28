
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


function add_student($CODEEQUI, $CODEORDRE, $CODESOUSTRAI,$CODEREP,$DATE,$DUREE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("insert into reparer (CODEEQUI,CODEORDRE,CODESOUSTRAI,CODEREP,DATE,DUREE) values (?,?,?,?,?,?)");
        $rp->execute([$CODEEQUI, $CODEORDRE, $CODESOUSTRAI,$CODEREP,$DATE,$DUREE]);
    } catch (PDOException $e) {
        echo ("Error adding student " . $e->getMessage());
    }
}


function delete_student($CODEPANNE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("delete from reparer where CODEPANNE=?");
        $rp->execute([$CODEPANNE]);
    } catch (PDOException $e) {
        echo ("Unable to remove a student  " . $e->getMessage());
    }
}

function edit_student($CODEEQUI, $CODEORDRE, $CODESOUSTRAI, $CODEREP, $DATE, $DUREE, $CODEPANNE)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("update reparer set CODEEQUI=?, CODEORDRE=?, CODESOUSTRAI=?, CODEREP=?, DATE=?, DUREE=? where CODEPANNE=?");
        $rp->execute([$CODEEQUI, $CODEORDRE, $CODESOUSTRAI, $CODEREP, $DATE, $DUREE, $CODEPANNE]);
    } catch (PDOException $e) {
        echo ("edit failed  " . $e->getMessage());
    }
}
function read()
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from reparer");
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
        $rp = $cnx->prepare("select * from reparer where CODEPANNE=?");
        $rp->execute([$CODEPANNE]);
        $resultat = $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        echo ("Student selection error " . $e->getMessage());
    }
}

function rechecher($CODEEQUI)
{
    try {
        $cnx = data();
        $rp = $cnx->prepare("select * from reparer where CODEEQUI like ? ");
        $rp->execute(["%$CODEEQUI%"]);
        $resultat = $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        echo ("Student selection error  " . $e->getMessage());
    }
}





