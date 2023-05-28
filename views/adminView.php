<div class="admin">
    Выберите категорию товара
    <form action="../pages/adminView2.php" method='POST'>
        <select name="select_tables" id="select_tables" size="3">
            <?= $value ?>
        </select>
        <input name="select" class="entry" type="submit" value="Подтвердить" />
    </form>
    <hr>
    <a href='../edit.php'>Редактировать html код страниц</a>
</div>