<?php require_once 'includes/helpers.php'; ?>
<?php $titol="about"; ?>
<?php require_once 'includes/header.php'; ?>

<!-- 
-->
<div class= 'main'>

<pre>
1. A partir de l'exemple MVC-01 fer un nou model: 
    Nota, amb les propietat privades nom, titol.

2. Fes el mètodes corresponents setters i getters.

3. Fes una classe modelBase a la carpeta models, 
    nom modelBase.php que té el mètode aconseguirTots().

4. Modifica les classes nota i usuari per tal que heredin 
    de modelBase el mètode aconseguirTots. Recorda incloure la classe amb un require.

5. Fes un controlador per a nota (notaController), amb el mètode mostrarTots().

6. Fes la vista corresponent.

7. Comprova que funciona passan paràmetres per get. Tal i com hem vist en l'exemple.

8. Fes un nou mètode a notaController.php anomenat crear. 
En aquest mètode hauràs de crear un objecte nota, 
assignar-li valors a través dels setters i getters ('Nota1' i 'Una nota qualsevol'), 
fer la vista corresponent (mostra el nom de la nota en h2, 
    i el titol i la descripcio en h3, 
cridar la vista des del controlador i comprova que funciona.

9. Fer que a index.php es carreguin els controladors amb un autoload.php.

10. Creeu la base de dades que hi ha al moodle.

11. Afegiu la base de dades uns quants usuaris fake i notes fake.

12. Afegeix la classe Database, adapta-la al teu entorn 

13. Modifica modelBase.php per a que es connecti a la base de dades.

14. Adapta el model nota.php als camps de la base de dades, 
    les propietats i els setters i getters.

15. Refés el que calgui  per a que  vista aconseguirTots  mostri les dades 
    en forma de llista tant per a usuaris, com per les notes

16. Fer un mètode desar nota a nota php. 

Ajuda
$sql = "INSERT INTO notes(usuari_id, titol, descripcio, data) VALUES ({$this->usuari_id}, '{$this->titol}', '{$this->descripcio}', CURDATE());";
		
deseu la consulta en una variable p.ex $sql
aquesta seria l'execució de la consulta
$desat = $this->db->query($sql);
i retorneu $desat;

17. Al controlador de nota, en el mètode crear,  fes una nota de prova 
    i comprova que s'ha desat correctament amb el llistat que ja has fet.

</pre>

<!--fi main-->
</div>

<?php require_once 'includes/footer.php';?>