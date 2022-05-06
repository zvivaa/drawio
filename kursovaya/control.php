<?php
    //Подключение шапки
    require_once("header.php");
	
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'dawdaw';
	$charset = 'utf8';
	
	$connect = mysqli_connect($server, $username, $password, $database);
  	mysqli_query($connect, "SET NAMES ".$charset."_general_ci'");
  	mysqli_query($connect, "SET CHARACTER SET '".$charset."_general_ci'");
?>
<style>
  th, td 
	{
        padding: 7px;
    }
	
   h1 
   {
    padding: 8px; 
   }
   input 
   {
       margin-left: 15px;
       width: 100px;
       height: 20px;
   }
   p {
       margin-left: 15px
   }
   button {
        margin-top: 7px;
       margin-left: 25px;
       width: 150px;
       height: 40px;
   }
.update-btn { 
margin-left: 0px;
}
	
</style>
<h1 align="center">Управление БД "Трудоустройство"</h1>
<table align="center">
<h2 align="center">Требуемые работники</h2>
        <tr>
            <th>ID_Заявки</th>
            <th>Дата заявки</th>
            <th>Номер заявки</th>
			<th>Требуемая специальность</th>
		<th>Действие</th>
        </tr>
		<?php
		
		    $zayavka_rabotodatel = mysqli_query($connect, "SELECT * FROM `zayavka_rabotodatel`");
			
            $zayavka_rabotodatel = mysqli_fetch_all($zayavka_rabotodatel);
			
			foreach ($zayavka_rabotodatel as $zayavka) {
                ?>
                    <tr>
                        <td><?= $zayavka[0] ?></td>
                        <td><?= $zayavka[1] ?></td>
                        <td><?= $zayavka[2] ?></td>
                        <td><?= $zayavka[3] ?></td>
						<td><a href="activ/new.php?id=<?= $zayavka[0]?>"><p class="update-btn">Обновить</p></a></td>
                    </tr>
                <?php
            }
        ?>
</table>
<br>

<div id="bonus" class="popup-bg">
        <div class="popup flex-column">
          <div class="flex-row pop-up-flex" >
            <span class="popup-title size-35" style="font-weight: 700">Добавление соискателя</span>
            <img
              class="close-popup"
              src="fonts/close.svg"
              alt=""
              onclick="document.getElementById('bonus').style.display='none'"
            />
          </div>
          <!-- добавление -->
          <div class="card-modal">
            <div
              class="flex-row"
              style="justify-content: space-between; align-items: center;width: 100%;"
            >
            <form action="activ/add.php" method="post"  align="center" style="padding-bottom: 50px">
                <p>Фамилия:</p>
                <input type="text"  name = "Фамилия">
            
                <p>Имя:</p>
                <input type="text" name = "Имя">
                
                <p>Отчество:</p>
                <input type="text" name = "Отчество">
                
                <p>Опыт:</p>
                <input type="text" name = "Опыт">	
                
                <p>Пол:</p>
                <input type="text" list="list1" name = "Пол">
                <datalist id="list1">
                <option value="Мужской">
                <option value="Женский">
                <option value="Не определённый">	
                </datalist>		

                <p>Возраст:</p>
                <input type="number" name="Возраст" min="18" max="70" step="1">
                
                <p>Телефон:</p>
                <input type="text" name = "Телефон">		

                <p>Специальность:</p>
                <input type="text" name = "Специальность">	

                <br> <br>
                <button type="submit">Добавить</button>
            </form>
        </div>
        </div>
        </div>
	        
</div>
              
    

<table align="center">
<h2 align="center">Работодатели</h2>
        <tr>
            <th>ID_Работодателя</th>
            <th>Должность</th>
            <th>Фамилия</th>
            <th>Имя</th>
			<th>Отчество</th>
			<th>Телефон</th>
			<th>Адрес</th>	
			<th>Фирма</th>		
        </tr>
		<?php
		
		    $rabotodatel = mysqli_query($connect, "SELECT * FROM `rabotodatel`");
			
            $rabotodatel = mysqli_fetch_all($rabotodatel);
			
			foreach ($rabotodatel as $rabotodatel_sam) {
                ?>
                    <tr>
                        <td><?= $rabotodatel_sam[0] ?></td>
                        <td><?= $rabotodatel_sam[1] ?></td>
                        <td><?= $rabotodatel_sam[2] ?></td>
						<td><?= $rabotodatel_sam[3] ?></td>
						<td><?= $rabotodatel_sam[4] ?></td>
						<td><?= $rabotodatel_sam[5] ?></td>	
						<td><?= $rabotodatel_sam[6] ?></td>	
						<td><?= $rabotodatel_sam[7] ?></td>			
                    </tr>
                <?php
            }
        ?>
</table>

<table  align="center">
<h2  align="center">Действительные заявки соискателей</h2>
        <tr>
            <th>ID_Заявки</th>
            <th>Дата заявки</th>
            <th>Номер Соискателя</th>
			<th>Специальность</th>		
			<th>Удаление заявки</th>
        </tr>
		<?php
		
		    $zayavka_soiskatel = mysqli_query($connect, "SELECT * FROM `zayavka_soiskatel`");
			
            $zayavka_soiskatel = mysqli_fetch_all($zayavka_soiskatel);
			
			foreach ($zayavka_soiskatel as $z_soiskatel) {
                ?>
                    <tr>
                        <td><?= $z_soiskatel[0] ?></td>
                        <td><?= $z_soiskatel[1] ?></td>
                        <td><?= $z_soiskatel[2] ?></td>
						<td><?= $z_soiskatel[3] ?></td>
						<td><a style="color: black;" href="activ/delete.php?id=<?= $z_soiskatel[0]?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
</table>
<div class="soiskatel">
<table  align="center">
<h2  align="center">Соискатели</h2>
        <tr>
            <th>ID_Соискателя</th>
            <th>Фамилия</th>
            <th>Имя</th>
			<th>Отчество</th>
			<th>Опыт(лет)</th>
			<th>Пол</th>
			<th>Возраст</th>
			<th>Телефон</th>
			<th>Специальность</th>
        </tr>
		<?php
		
		    $soiskatel = mysqli_query($connect, "SELECT * FROM `soiskatel`");
			
            $soiskatel = mysqli_fetch_all($soiskatel);
			
			foreach ($soiskatel as $soiskatel_nu) {
                ?>
                    <tr>
                        <td><?= $soiskatel_nu[0] ?></td>
                        <td><?= $soiskatel_nu[1] ?></td>
                        <td><?= $soiskatel_nu[2] ?></td>
						<td><?= $soiskatel_nu[3] ?></td>
						<td><?= $soiskatel_nu[4] ?></td>
						<td><?= $soiskatel_nu[5] ?></td>
						<td><?= $soiskatel_nu[6] ?></td>
						<td><?= $soiskatel_nu[7] ?></td>
						<td><?= $soiskatel_nu[8] ?></td>		
                    </tr>
                <?php
            }
        ?>
</table>
<h3 align="center">Добавление соискателя</h3>
    <div style="padding-bottom: 50px;" class="btn" align="center" onclick="document.getElementById('bonus').style.display='block'">
    <input  id="btn-deposite" class="btn-depositeindex" type="button" value="Меню добавления">
	</div>
</div>