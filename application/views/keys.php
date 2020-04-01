<?php
$predefinedText = 'бла-бла-блаraz:данные которые находятся под тегом разdva: данные из тега два!
Еще текст из тега 2 tri:данные из тега 3!!!raz:на самом деле в теге 1 эти данные!';

if (!isset($textWithKeys)) {
    $textWithKeys = $predefinedText;
}

?>

<div class="panel panel-default">
    <div class="panel-heading">Исходные данные:</div>
    <div class="panel-body">
        <form role="form">
            <div class="form-group">
                <label for="comment">Введите текст:</label>
                <textarea class="form-control" rows="5" name="textWithKeys"><?php echo $textWithKeys; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary" formmethod="post">Отправить</button>
        </form>
    </div>
</div>

<?php if (isset($keysWithData)) {?>
    <div class="panel panel-info">
        <div class="panel-heading">Результат:</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="comment">Итоговый массив:</label>
            <textarea class="form-control" rows="5" readonly><?php print_r($keysWithData); ?></textarea>
            </div>
        </div>
    </div>
<?php } ?>

