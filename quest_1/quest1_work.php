<?php 
if(is_numeric($_POST['year']))
{

	if(($_POST['year'] % 4) == 0)
		{
			if ($_POST['year']%100==0) 
			{
				if ($_POST['year']%400==0) 
				{
					echo 'Да';
				}
				else
				{
					echo 'Нет';
				}
			}
			else
			{
				echo 'Да';
			}
		}
		else
		{
			echo 'Нет';
		}
}
else
{
	echo "ОШИБКА ВО ВХОДНЫХ ДАННЫХ";
}
 ?>
