<div class="admin">
    <?= $table ?>
    <?= $id ?>
    <form action="../scripts/delete.php?table=<?= $table ?>&id=<?= $id ?>" method='post'>
        <select name="select_item" id="select_item" size="3">
            <?= $content2 ?>
        </select>
        <input name="delete" class="entry" type="submit" value="Удалить" />
    </form>

    <form action="../scripts/add.php?table=<?= $table ?>" method="POST" style="flex-direction: row">
        <input name="image" class="entry" type="text" placeholder='image'>
        <input name="title" class="entry" type="text" placeholder='name'>
        <input name="discription" class="entry" type="text" placeholder='discription'>
        <input name="price" class="entry" type="text" placeholder='price'>
        <input name="add" class="entry" type="submit" value="Добавить" />
    </form>
</div>