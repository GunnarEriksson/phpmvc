<h2>Ändra kommentar</h2>
<div class='comment-form'>
    <form method="post">
        <input type="hidden" name="redirect" value="<?=$this->url->create("$pageKey")?>">
        <input type="hidden" name="pageKey" value='<?=$pageKey?>'>
        <input type="hidden" name="id" value='<?=$id?>'>
        <fieldset>
        <legend>Ändra en kommentar</legend>
        <p><label>Kommentar:<br/><textarea name='content'><?=$content?></textarea></label></p>
        <p><label>Namn:<br/><input type='text' name='name' value='<?=$name?>'/></label></p>
        <p><label>Hemsida:<br/><input type='text' name='web' value='<?=$web?>'/></label></p>
        <p><label>E-post:<br/><input type='text' name='mail' value='<?=$mail?>'/></label></p>
        <p class='buttons'>
            <input type='submit' name='doEdit' value='Spara' onClick="this.form.action = '<?=$this->url->create('comments02/edit')?>'"/>
        </p>
        <output><?=$output?></output>
        </fieldset>
    </form>
</div>
