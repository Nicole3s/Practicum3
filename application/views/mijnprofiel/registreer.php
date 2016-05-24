<?php echo validation_errors(); ?>

<?php echo form_open('mijnprofiel/registreer'); ?>

<h5>Nickname</h5>
<input type="text" name="nickname" value="<?php echo set_value('nickname'); ?>" size="50" />

<h5>Naam</h5>
<input type="text" name="naam" value="<?php echo set_value('naam'); ?>" size="50" />

<h5>Wachtwoord</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<h5>Wachtwoord Bevestiging</h5>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

<h5>Email Adres</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<div><input type="submit" value="Registreer" /></div>

</form>
