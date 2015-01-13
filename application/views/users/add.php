<?=  bs_headings(3, 'Apa Ya?')?>

<?=form_open('users/save')?>

<?=finput('Username',set_value('Username'))?> <?=form_error('Username');?>

<?=fpassword('Password',set_value('Password'))?> <?=form_error('Password');?>

<?=fpassword('PassConf',set_value('PassConf'))?> <?=form_error('PassConf');?>

<?=finput('Email',set_value('Email'))?> <?=form_error('Email');?>

<?=fbutton_submit('submit', 'Simpan')?>

<?=form_close();?>

