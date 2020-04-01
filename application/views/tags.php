<?php
    $predefinedText = '[Основной_тег:тег для всего остального]
    Куча всяких данных
    Куча всяких данных
    Куча всяких данныхКуча всяких данныхКуча всяких данныхКуча всяких данных
[/Основной_тег]
[Внутренний_тег:тег расположенный внутри]Какие-то данные, которые мы не поместили в основной тег[/Внутренний_тег]

[Дополнительный_тег:просто дополнительный тег]
    текст, который мы поместили в дополнительный тег
[/Дополнительный_тег]

Текст без тегаТекст без тегаТекст без тега
Текст без тегаТекст без тегаТекст без тега
Текст без тегаТекст без тегаТекст без тега

[Дополнительный_тег:просто дополнительный тег]
    Еще текст в дополнительном теге
[/Дополнительный_тег]';

if (!isset($taggedText)) {
    $taggedText = $predefinedText;
 }

?>

<div class="panel panel-default">
    <div class="panel-heading">Исходные данные:</div>
    <div class="panel-body">
        <form role="form">
            <div class="form-group">
                <label for="comment">Введите текст:</label>
                <textarea class="form-control" rows="5" name="taggedText"><?php echo $taggedText; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary" formmethod="post">Отправить</button>
        </form>
    </div>
</div>

<?php if (isset($firstArray) && isset($secondArray)) {?>
    <div class="panel panel-info">
        <div class="panel-heading">Результат:</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="comment">Первый массив:</label>
            <textarea class="form-control" rows="5" readonly><?php print_r($firstArray); ?></textarea>
            </div>

            <div class="form-group">
                <label for="comment">Второй массив:</label>
            <textarea class="form-control" rows="5" readonly><?php print_r($secondArray) ?></textarea>
            </div>
        </div>
    </div>
<?php } ?>

