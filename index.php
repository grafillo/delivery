Доставка
<form action="result.php" method="post">
    <label for="sourceKladr">Откуда:</label>
    <br>
    <input type="text" id="sourceKladr" name="sourceKladr">
    <br>
    <label for="targetKladr">Куда:</label>
    <br>
    <input type="text" id="targetKladr" name="targetKladr">
    <br>
    <label for="weight">Вес:</label>
    <br>
    <input type="text" id="weight" name="weight" value="2">
    <br>
    <input type="radio" id="fast" name="delivery" value="fast"
           checked>
    <label for="huey">Быстрая</label>
    <br>
    <input type="radio" id="slow" name="delivery" value="slow"
           >
    <label for="huey">Медленная</label>
    <br>
    <button type="submit">Заказать</button>
</form>