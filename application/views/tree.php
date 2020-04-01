<div class="panel panel-default">
    <div class="panel-heading">Исходные данные:</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="comment">Дерево из БД:</label>
            <textarea class="form-control" rows="5" name="tree" readonly><?php
                foreach ($tree as $key => $value) {
                    echo $value['name']."\n";
                    printChildren($value['children'], "\t");
                }

                function printChildren($children, $tabs)
                {
                    foreach ($children as $key => $value) {
                        echo $tabs."->".$value['name']."\n";

                        if (isset($value['children'])) {
                            printChildren($value['children'], $tabs."\t");
                        }
                    }
                }
            ?></textarea>
        </div>
    </div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">Результат:</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="comment">Выборка записей без родителей с тремя и более потомками:</label>
            <textarea class="form-control" rows="5" readonly><?php print_r($firstSelection); ?></textarea>
        </div>

        <div class="form-group">
            <label for="comment">Выборка записей без потомков, но с 2-мя старшими родителями:</label>
            <textarea class="form-control" rows="5" readonly><?php print_r($secondSelection) ?></textarea>
        </div>
    </div>
</div>
