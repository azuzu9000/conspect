<aside class="aside-col">          
    <div class="container-form">
        <form type="get" action="form.php">
            <input type="text" id="search-form" name="search" placeholder="Поиск" />
            <button class="button-search" type="button"> Найти</button>
        </form>
    </div>
    <section class="container-category">
        <ul class="cat-list list">
            <li><a href="./ubuntu.php" class="link">Ubuntu</a></li>
            <li><a href="./php_info.php" class="link">PHP</a>
                <div>
                    <ul>
                        <li><a href="./php_test.php" class="link text-paragraph">test</a></li>
                    </ul>
                </div>
            </li>

            <li><a href="./java.php" class="link">Java</a></li>
            <li><a href="./maven.php" class="link">Maven</a></li>
            <li><a href="./gradle.php" class="link">Gradle</a></li>
            <li><a href="./html.php" class="link">HTML</a></li>
            <li><a href="./css.php" class="link">CSS</a></li>
            <li><a href="./javascript.php" class="link">JavaScript</a></li>
            <li><a href="./git.php" class="link">Git</a></li>
            <li><a href="./info.php" class="link">info</a></li>              
        </ul>
    </section>

    <?php require "blocks/calendar.php" ?>
    <!-- CALENDAR -->
    <!-- <section class="section-calendar">
      <table id="calendar2">
      <thead>
      <tr><td>‹<td colspan="5"><td>›
      <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
      <tbody>
      </table>
    </section> -->
</aside>