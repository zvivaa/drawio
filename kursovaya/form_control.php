<head>
 <link rel="icon" href="images/favicon.png" type="image/png">
</head>
<body>
<h1 align="center">Отдел кадров ООО "Начало"</h1>
<table align="center">
<h2 align="center">Требуемые работники</h2>
        <tr>
            <th>ID_Заявки</th>
            <th>Дата заявки</th>
            <th>Номер заявки</th>
			<th>Требуемая специальность</th>
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
						<td><a href="new.php?id=<?= $zayavka[0]?>"><img src="images/4.png" alt="картинки не будет. картинка приняла ислам :("></a></td>
                    </tr>
                <?php
            }
        ?>
</table>
<br>

<table align="center">
<h2 align="center">Наши работодатели</h2>
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
						<td><a style="color: #FFF8DC;" href="activ/delete.php?id=<?= $z_soiskatel[0]?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
</table>
<table  align="center">
<h2  align="center">Наши соискатели</h2>
        <tr>
            <th>ID_Соискателя</th>
            <th>Фамилия</th>
            <th>Имя</th>
			<th>Отчество</th>
			<th>Опыт</th>
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
    <form action="activ/add.php" method="post"  align="center">
		<p>Фамилия</p>
        <input type="text"  name = "f">
	
		<p>Имя</p>
        <input type="text" name = "i">
		
       	<p>Отчество</p>
        <input type="text" name = "o">
		
		<p>Опыт</p>
        <input type="text" name = "opit">	
        
		<p>Пол</p>
        <input type="text" list="list1" name = "pol">
		<datalist id="list1">
		<option value="Мужской">
		<option value="Женский">
		<option value="Не определённый">	
		</datalist>		

        <p>Возраст</p>
        <input type="number" name="vsrt" min="18" max="70" step="1">
		
        <p>Телефон</p>
        <input type="text" name = "tlph">		

        <p>Специальность</p>
        <input type="text" name = "spec">	

		<br> <br>
        <button type="submit">Добавить</button>
</body>