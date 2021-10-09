<?php if (isset($greske)) : ?>
    <?php echo $greske; ?>
<?php endif; ?>

<?php if (isset($korisnici)) : ?>
    <?php foreach($korisnici as $korisnik) : ?>	
        <?php echo htmlspecialchars($korisnik->ime) . '<br/>'; ?>
        <?php echo htmlspecialchars($korisnik->prezime) . '<br/>'; ?>
        <?php echo htmlspecialchars($korisnik->email) . '<br/>'; ?>
        <?php echo '-------------------' . '<br/>';?>
    <?php endforeach; ?>
<?php endif; ?>


