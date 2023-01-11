-- -----------------------------------------------------
-- 1. Requête d'ajout d'une actualité
-- -----------------------------------------------------

INSERT INTO `t_actualite_acte` (`acte_numero`, `acte_titre`, `acte_text`, `acte_date_pub`, `cpte_pseudo`)
 VALUES ('21908787', 'nouvelle épisode bokuno_hero', 'épisode 17', '2021-10-14', 'houdazzaoui');


-- -----------------------------------------------------
-- 2. Requête donnant la dernière actualité ajoutée
-- -----------------------------------------------------

SELECT new_id,new_titre,new_texte,new_date FROM t_news_new
WHERE new_date in (SELECT MAX(new_date) FROM t_news_new)

-- -----------------------------------------------------
-- 3. Requête listant toutes les actualités et leur auteur
-- -----------------------------------------------------

SELECT * FROM t_news_new

-- -----------------------------------------------------
-- 4. Requête listant les 5 dernières actualités ajoutées et leur auteur
-- -----------------------------------------------------

SELECT * FROM t_news_new
ORDER BY new_date DESC
LIMIT 5


-- -----------------------------------------------------
-- 5. Requête de modification d'une actualité
-- -----------------------------------------------------

UPDATE t_news_new
SET new_titre='modification de l`actualité'
WHERE new_id=5

-- -----------------------------------------------------
-- 6. Requête de suppression d'une actualité à partir de son ID (n°)
-- -----------------------------------------------------

DELETE FROM t_news_new
WHERE new_id=5

-- -----------------------------------------------------
-- 7. Requête de suppression de toutes les actualités publiées avant une certaine date(suppression des actualités trop anciennes)
-- -----------------------------------------------------

DELETE FROM t_news_new
WHERE `new_date` < '2020-12-31'

-----------------------
----8
------------------------
INSERT INTO `t_profil_pfl` (`pfl_nom`, `pfl_prenom`, `pfl_email`, `pfl_role`, `pfl_validite`, `pfl_date`, `cpte_pseudo`)
 VALUES ('ECHERARHI', 'HAMZA', 'HAMZA.ECHERARHI@GMAIL.COM', 'A', 'A', '2022-01-28', 'gEstionnaire');

--------------------------------------------------------
---9)
-------------------------------------------------------
SELECT pfl_nom, pfl_prenom,cpte_pseudo FROM t_profil_pfl JOIN t_compte_cpte USING (cpte_pseudo) where cpte_pseudo="gEstionnaire" 
AND cpte_mot_de_passe=MD5("gest22!_OPXE")AND pfl_validite='A'
-----------------------------------------------
--10) 
------------------------------------------
SELECT * FROM `t_profil_pfl` WHERE cpte_pseudo="gEstionnaire"
-----------------------------------------------
--11)
-----------------------------------------------
SELECT pfl_role FROM `t_profil_pfl` WHERE pfl_nom="ECHERARHI" AND pfl_prenom="Hamza"
----------------------------------
__________Q12)
---------------------------------
UPDATE t_profil_pfl SET pfl_nom ='KADORI', pfl_prenom='Yassine', pfl_email='Yassi@gmailcom' WHERE cpte_pseudo='gEstionnaire'
------------------------
_________Q13)
------------------------
 UPDATE t_compte_cpte SET cpte_mot_de_passe = MD5('ham123') WHERE cpte_pseudo="gEstionnaire"
-------------------------------
________Q14)
-------------------------------
SELECT * FROM `t_profil_pfl` join t_compte_cpte USING (cpte_pseudo)
--------------------------------
__________Q15)
--------------------------------
UPDATE t_compte_cpte SET pfl_role = 'A' WHERE cpte_pseudo="gEstionnaire" ;
    UPDATE t_compte_cpte SET pfl_role = 'D' WHERE cpte_pseudo="gEstionnaire" ;
	
------------------------------	
_________Q16)
----------------------------
INSERT INTO `t_configuration_conf` (`conf_initule`, `conf_date_debut`, `conf_date_fin`, `conf_presentaion`, `conf_lieu`, `conf_date_presentation`, `conf_text_bienv`) VALUES ('12345', '2022-01-10', '2022-05-01', 'Comment la Pop Culture a représenté Tokyo ? Comment la fiction enrichit-elle la vraie ville ?   ', 'Tokyo', '2022-01-11', 'Shigeto KOYAMA, Yoh YOSHINARI et Tsuyoshi KUSANO viendront vous parler de l\'animation japonaise et vous feront une démonstration de dessin en live. ');
-----------------------------------------------
----17.
--------------------------------------------------

SELECT COUNT(conf_initule) FROM `t_configuration_conf`

---------------------------------------------------
---18
------------------------------------------------
SELECT * FROM `t_exposant_expo` WHERE expo_id = '1234567890'
---------------------------------------------
---19
----------------------------------------
UPDATE t_configuration_conf 
set conf_date_debut='2022-01-02', conf_date_fin='2022-04-29', 
conf_presentaion ="presentation d'une site web de sujet de manga", 
conf_lieu="departement d'un informatique Université de bretagne occidentale",
 conf_date_presentation='2022-04-30', 
 conf_text_bienv="Venez découvrir les réalisations des étudiants de Licence Informatique ! On attend votre visite !" 
WHERE conf_initule= 'Exposition des projets des étudiants'

--------------------------------------------------------
----20
------------------------------------------------------


delete from t_exposant_expo`


--------------------------------------------------------
----21
------------------------------------------------------

INSERT INTO `t_visiteur_vis` (`vis_numero`, `vis_mot_de_passe`, `vis_date_heure`, `vis_nom`, `vis_prenom`, `vis_email`, `cpte_pseudo`) 
VALUES ('766734221', MD5('1234567891'),'2022-01-31 16:19:07', 'STEEV', 'DOMINO', 'deletdomino@hotmail.fr', 'gEstionnaire')


--------------------------------------------------------
----22
------------------------------------------------------

SELECT vis_numero,vis_email,com_numero,com_text 
FROM t_visiteur_vis 
JOIN t_commentaire_com USING (vis_numero)

--------------------------------------------------------
----23
------------------------------------------------------

DELETE FROM t_visiteur_vis
WHERE vis_numero=766734210

-------------------------------
_________Q24
-------------------------------

SELECT vis_numero
from t_visiteur_vis
left join t_commentaire_com using (vis_numero)
WHERE com_text is NULL  /*NULL on le fait juste qu'on a une jointures externe/interne */

SELECT COUNT(*) as nbrVisiteurNoCom
FROM t_visiteur_vis
left join t_commentaire_com using (vis_numero)
WHERE com_text IS NULL
/* nombre totale des visiteurs */
select count(*) as nbrVisiteur
from t_commentaire_com;
/*le calcul du %*/ 
set @total_visiteurs = (SELECT count(*)
      from t_visiteur_vis);
SELECT @total_visiteurs;

set @nb_visiteurs_SANS_commentaire =(select count(*)
            from t_visiteur_vis
            left join t_commentaire_com using (vis_numero)
         WHERE com_text IS NULL);
SELECT @nb_visiteurs_SANS_commentaire;
SELECT @nb_visiteurs_SANS_commentaire/@total_visiteurs * 100 AS pourcentage;

-------------------------------
_______Q25
-------------------------------
select vis_numero
from t_visiteur_vis
where vis_date_heure<= Now()
and Now() <= TIMESTAMPADD (HOUR,3,vis_date_heure)
and vis_numero='766734210';


-------------------------------
_______Q26
-------------------------------








-------------------------------
_______Q27
-------------------------------

SELECT * FROM `t_commentaire_com`



-------------------------------
_______Q28
-------------------------------

SELECT *, vis_email
FROM t_commentaire_com 
JOIN t_visiteur_vis USING (vis_numero)

-------------------------------
_______Q29
-------------------------------
 ***************

UPDATE t_commentaire_com 
JOIN t_visiteur_vis USING (vis_numero)
SET com_text="Ohhhh c'est magnifique la nouvelle episode est tres genial.... " 
WHERE vis_numero='766734210' and vis_mot_de_passe='123456789'

-------------------------------
_______Q30
-------------------------------
INSERT INTO `t_oeuvre_ovre` (`ovre_code`, `ovre_initule`, `ovre_date_creation`, `ovre_description`, `ovre_fichier_img`)
 VALUES('601362478', 'Dr.Stone', '2017-03-06', 'Dr. Stone (ドクターストーン, Dokutā Sutōn?),
 également stylisé Dr.STONE, est un shōnen manga japonais écrit par Riichirō Inagaki et dessiné par Boichi1. 
 Il est prépublié dans le magazine Weekly Shōnen Jump de Shūeisha depuis le 6 mars 20172', 'image4.jpnj');

-------------------------------
_______Q31
-------------------------------

SELECT ovre_initule,ovre_description,ovre_fichier_img FROM `t_oeuvre_ovre` 

-------------------------------
_______Q32
-------------------------------

select * from t_oeuvre_ovre
join t_presentation_pre USING(ovre_code)
where expo_id ='1234567890'


-------------------------------
_______Q33
-------------------------------


SELECT expo_nom,expo_text_bio,expo_url_site_web,expo_fichier_img FROM `t_exposant_expo`  

-------------------------------
_______Q34
-------------------------------
****************
SELECT * FROM `t_exposant_expo` WHERE expo_id="1234567891"

-------------------------------
_______Q35
-------------------------------

SELECT ovre_initule,ovre_fichier_img FROM `t_oeuvre_ovre` 
WHERE ovre_code in( select ovre_code from t_presentation_pre Group by ovre_code having COUNT (expo_id) >1);




-------------------------------
_______Q36
-------------------------------


select * from t_oeuvre_ovre



--------------------------
_________Q37
--------------------------


select expo_id t_presentation_pre
where ovre_id in( select ovre_id from t_presentation_pre Group by ovre_id having count (exp_id)>1;


---------------------------
_________Q38
---------------------------

DELETE FROM t_presentation_pre 
where expo_id =1234567890 AND ovre_code NOT IN 
(SELECT ovre_code FROM t_presentation_pre GROUP BY ovre_code HAVING COUNT(expo_id)>1


---------------------------
_________Q39
---------------------------
 *************
DELETE from t_oeuvre_ovre
WHERE ovre_code=601362478


---------------------------
_________Q40
---------------------------

UPDATE t_oeuvre_ovre
 set ovre_initule="NORUTO SHIPODEN", ovre_date_creation="1999-09-12", 
 ovre_description="Naruto shipoden est un shōnen manga écrit et dessiné par Masashi Kishimoto. 
 Naruto a été prépublié dans l'hebdomadaire Weekly Shōnen Jump de l'éditeur Shūeisha entre septembre 1999 et novembre 2014. 
 La série a été compilée en 72 tomes.", ovre_fichier_img=" image33.jpnj"
 WHERE ovre_code="601362479"
 
 
 ---------------------------
_________Q41
---------------------------


INSERT INTO `t_presentation_pre` (`expo_id`, `ovre_code`) VALUES ('1234567892', '601362480');
 ---------------------------
_________Q42
---------------------------
delete from t_exposant_expo
where expo_id NOT IN (SELECT expo_id FROM t_presentation_pre );