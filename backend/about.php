<table>
    <tr>
        <td>文字</td>
        <td>顯示</td>
        <td>刪除</td>
    </tr>
    <?php
    $rows = $About->all();
    foreach ($rows as $row) {
    ?><tr>
            <td><input type="text" name="about[]" value="<?= $row['about']; ?>"></td>
            <td><input type="radio" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
            </td>
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            
        </tr>
    <?php
    }
    ?>
</table>