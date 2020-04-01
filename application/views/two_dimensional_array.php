<?php
if (!isset($twoDimensionalArray)) {
    $twoDimensionalArray = 'a1 a2 a3
b1 b2
c1 c2 c3
d1';
}
?>
<div class="panel panel-default">
    <div class="panel-heading">Исходные данные:</div>
    <div class="panel-body">
        <form role="form">
            <div class="form-group">
                <label for="comment">Введите двумерный массив:</label>
                <textarea class="form-control" rows="5" name="twoDimensionalArray"><?php
                    echo $twoDimensionalArray;
                ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary" formmethod="post">Отправить</button>
        </form>
    </div>
</div>

<?php if (isset($allCombinationsArray)) {?>
    <div class="panel panel-info">
        <div class="panel-heading">Результат:</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="comment">Массив со всеми комбинациями:</label>
                <textarea class="form-control" rows="5" readonly><?php

                    foreach ($allCombinationsArray as $row => $columns) {
                        $allCombinationsArray[$row] = implode(' ', $columns);
                    };

                    echo implode("\r\n", $allCombinationsArray);

                ?></textarea>
            </div>
        </div>
    </div>
<?php } ?>