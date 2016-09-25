<h2>Ta bort kommentar</h2>
<div class='comment-form'>
    <form method="post">
        <input type="hidden" name="redirect" value="<?=$this->url->create("$pageKey")?>">
        <input type="hidden" name="pageKey" value='<?=$pageKey?>'>
        <input type="hidden" name="id" value='<?=$id?>'>
        <fieldset>
        <legend>Ta bort kommentaren</legend>
        <p><label>Kommentar:<br/><textarea name='content' readonly><?=$content?></textarea></label></p>
        <p><label>Namn:<br/><input type='text' name='name' value='<?=$name?>' readonly/></label></p>
        <p><label>Hemsida:<br/><input type='text' name='web' value='<?=$web?>' readonly/></label></p>
        <p><label>E-post:<br/><input type='text' name='mail' value='<?=$mail?>' readonly/></label></p>
        <p class='buttons'>
            <input type='submit' name='doDelete' value='Radera' onClick="this.form.action = '<?=$this->url->create('comments02/delete')?>'"/>
            <input type='submit' name='doRemoveAll' value='Radera allt' onClick="this.form.action = '<?=$this->url->create('comments02/remove-all')?>'"/>
        </p>
        <output><?=$output?></output>
        </fieldset>
    </form>
</div>
