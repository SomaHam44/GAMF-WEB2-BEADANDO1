
<h2>Vélemény rögzítése</h2>
<form action = "<?= SITE_ROOT ?>uzenetek" method="post">
    <fieldset>              
        <label for="szoveg">Üzenet:</label><input type="textarea" name="szoveg" required><br><br>        
        <input type="submit"  value="Küldés">                
    </fieldset>
</form>

<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>

