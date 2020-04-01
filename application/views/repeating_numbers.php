<div class="panel panel-default">
    <div class="panel-heading">Исходные данные:</div>
    <div class="panel-body">
        <form role="form">
            <div class="form-group" hidden>
                <label for="comment">Исходный массив:</label>
                <textarea class="form-control" rows="10" id="numbersArray" name="numbersArray" ><?php
                    echo $numbersArray;
                ?></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success" id="generate" onclick="delayedGenerate()">Генерировать</button>
                <button type="submit" class="btn btn-primary" id="send" formmethod="post" style="display:none">Отправить</button>
                <button type="button" class="btn btn-default" id="save" onclick="saveGeneratedFile()" style="display:none">Сохранить сгенерированный массив</button>
            </div>
            <div class="form-group">
                <label for="inputFile">Загрузка своих данных без генерации:</label>
                <input type="file" id="inputFile" multiple accept="text/plain" onchange='processFiles(this.files)'>
                <p class="help-block">Загрузите свой файл с массивом в JSON.</p>
            </div>
        </form>
    </div>
</div>
<?php if(isset($repeatingNumbers)) :?>
<div class="panel panel-info">
    <div class="panel-heading">Результат:</div>
    <div class="panel-body">
        <div class="container-fluid">
            <?php
                echo 'Найдено '.$repeatingNumbers.' повторяющихся чисел.';
            ?>

            <p><a href="downloadFile?fileName=repeatingNumbers.txt">Загрузить результат</a></p>
        </div>
    </div>
</div>
<?php endif; ?>

<script>

    function randomInteger(min, max) {
        var rand = min - 0.5 + Math.random() * (max - min + 1)
        rand = Math.round(rand);
        return rand;
    }

    function generateArray()
    {
        var minValue = 100000;
        var maxValue = 1500000;
        var elementsCount = 1000000;
        var numbersArray = [];

        for (var i = 0; i < elementsCount; i++) {
            numbersArray[i] = randomInteger(minValue, maxValue);
        }

        $("#numbersArray").text(JSON.stringify(numbersArray));
        $("#generate").removeClass('disabled');

        var sendButton = $("#send");
        sendButton.removeClass('disabled');
        sendButton.show();
        $("#save").show();
    }

    function delayedGenerate()
    {
        $("#generate").addClass('disabled');
        $("#send").addClass('disabled');
        setTimeout(generateArray, 10);
    }

    function saveGeneratedFile()
    {
        var numbersArray = $("#numbersArray").text();
        var blob = new Blob([numbersArray], {type: "text/plain;charset=utf-8"});
        saveAs(blob, "million.txt");
    }

    function processFiles(files) {
        var file = files[0];

        var reader = new FileReader();

        reader.onload = function (e) {
            $("#numbersArray").text(e.target.result);
            $("#send").show();
        };

        reader.readAsText(file);
    }
</script>