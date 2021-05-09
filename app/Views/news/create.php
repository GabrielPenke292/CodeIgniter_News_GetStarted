<h2><?= esc($title) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Título</label>
    <input type="input" name="title"> <br>

    <label for="body">Texto</label>
    <textarea name="body"></textarea><br>

    <input type="submit" value="Criar noticia" name="submit">
</form>
