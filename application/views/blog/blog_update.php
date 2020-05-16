<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Saya</title>
  </head>
  <body>
    <h1>Edit Artikel</h1>
    <form action="<?php echo base_url('blog/update_process'); ?>" method="post">
       <?php foreach ($post as $col): ?>
       <input type="hidden" name="id" value="<?= $col->id; ?>" ></input>
      <label>
        Judul: <input type="text" name="judul" autofocus value="<?= $col->title; ?>">
      </label>
      <br>
      <label>
        Konten:<br>
        <textarea name="konten"><?= $col->content; ?></textarea>
      </label>
      <?php endforeach; ?>
      <br>
      <input type="submit" value="Simpan">
    </form>
  </body>
</html>
