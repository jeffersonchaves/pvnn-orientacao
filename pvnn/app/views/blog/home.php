<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['titulo']  ?></title>
</head>
<body>

  <div class="area-administrativa">

    <a href="<?= $data['base_path'] ?>/app/controllers/AdminController.php?action=index">área administrativa</a>

  </div>

  <!-- REPETIR POSTAGENS -->
  <?php foreach($data['posts'] as $post): ?>

    <?php $dataFormatada = new DateTime($post['data']); ?>

    <article class="blog-post">
        <h2 class="blog-post-title"><?= $post['titulo']; ?></h2>
        <p class="blog-post-meta"><?= $dataFormatada->format('d / m / Y'); ?> por <a href="#"><?= $post['autor']; ?></a></p>

        <p><?= $post['texto']; ?></p>
        
    </article>

  <?php endforeach; ?>

  <?php if(sizeof($data['posts']) < 1): ?>
    <article class="blog-post">Nenhuma publicação cadastrada.</article>
  <?php endif; ?>
  
</body>
</html>