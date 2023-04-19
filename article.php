<!DOCTYPE html>
<!--
Design by LeonidDavidchuk
Design by LeonidDavidchuk
Design by LeonidDavidchuk
Design by LeonidDavidchuk
Design by LeonidDavidchuk
Design by LeonidDavidchuk

-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ЧП "Фортуна"</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<meta content="width=1200" name="viewport" id="viewport">
	<link href="icon.ico" rel="shortcut icon" type="image/x-icon" />
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="path/to/jquery.translate.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="jquery/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script src="google-translate.js"></script>
	<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
	<style>
		body {
			top: 0 !important;
		}

		.skiptranslate {
			display: none;
			height: 0;
		}

		.language__img {
			cursor: pointer;
		}
	</style>
</head>

<body>
	<div id="header-wrapper">

		<div id="header" class="container">
			<div id="menu">
				<ul>
					<li><a href="index.php" accesskey="1" title="">Главная</a></li>

					<li><a href="article.php" accesskey="2" title="">Статьи</a></li>
					<li><a href="equipment.php" accesskey="3" title="">Оборудование</a></li>
					<li><a href="info.php" accesskey="4" title="">Описание системы</a></li>
					<li><a href="sertif.php" accesskey="5" title="">Сертификаты</a></li>
					<li><a href="object.php" accesskey="6" title="">Объекты</a></li>
					<li><a href="contact.php" accesskey="8" title="">Контакты</a></li>
					<li><a accesskey="8" title="" data-google-lang="en">'ENG'</a></li>
					<li><a accesskey="8" title="" data-google-lang="ru">'RU'</a></li>
					<li><a accesskey="8" title="" data-google-lang="uk">'UKR'</a></li>


				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper">

		<div id="staff" class="container">
			<div class="title">
				<h2>
					Практические аспекты создания компьютерных систем коммерческого учета товарных запасов <br>
					в резервуарных парках предприятий масложирового комплекса.
				</h2>
			</div>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Директор:
				Давидчук А.Н, Технический Директор ЧП "Фортуна": Баклушин Ю.Н, <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Директор
				ГНПП «Эльдорадо» г. Днепр: Просянык А.В, <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Начальник
				службы КИПиА «Донецкий маргариновый завод»: Соколов В.О. <br>
			</p>
			<p>
				Решение задач комплексной автоматизации предприятий масложирового комплекса (МЖК) имеет много общих
				решений, используемых в интегрированных АСУ комбинатов хлебопродуктов [1]. Как следствие этого такие
				компьютерные системы, как весоизмерение и дозирование на тензодатчиках, измерение температуры в силосах
				элеватора, измерение влажности зерновых в потоке, управление маршрутами, и другие, полностью идентичны.
				Технические решения таких систем и результаты их внедрения на ряде предприятий агропромышленного
				комплекса неоднократно освещались нами в журнале «Хранение и переработка зерна» в период с 2002 по
				2004г. Более подробную информацию можно найти на сайте www.dnvpeldorado.dp.ua .
				Однако некоторые задачи, решаемые при автоматизации предприятий МЖК сугубо специфичны. К таким задачам
				относится задача создания компьютерных систем коммерческого учета (КСКУ) товарных запасов в резервуарных
				парках предприятий МЖК. Для всех предприятий МЖК, имеющих резервуарные парки с растительными маслами,
				актуальна проблема создания КСКУ, поскольку необходима объективная картина движения товарных и сырьевых
				потоков, возможность ее анализа, но очень мало предприятий МЖК Украины имеют систему действительно
				коммерческого учета, поскольку при ее создании возникает много проблем.
				Проблемы при создании КСКУ начинаются уже с выбора датчика для измерения уровня растительного масла в
				резервуаре. Дело в том, что датчик должен наряду с высокой точностью измерения уровня (не хуже +-1 мм),
				обладать надежностью при работе с такими вязкими и адгезионными жидкостями, что обеспечивается
				минимальным контактом первичного преобразователя с растительным маслом.
				Возможно, лучшим решением было бы применение радарных уровнемеров известных производителей (например
				SAAB), но применение ограничивает их очень высокая стоимость (больше 12000 у.е.). Более дешевые
				уровнемеры этого класса имеют неудовлетворительную точность.
				Некоторые предприятия пытались использовать для этих целей датчики давления, однако собственная
				невысокая точность этих датчиков сразу же исключает возможность создания систем коммерческого учета, и
				ограничивает их использование потребностями технологов.
				<br>
				<br>
				<br>

				<img src="images/r1stat.jpg" width="148" height="236" class="leftimg">
				<img src="images/r2stat.jpg" width="277" height="260" class="rightimg">
				На Донецком маргариновом заводе использован датчик уровня-плотности жидкости серии ИПЖ, разработанный
				Институтом технической механики НАН Украины и ЧП "Фортуна", г. Днепр, для измерения уровня-плотности
				нефтепродуктов.
				<br>
				<br>
				Принцип работы:
				взвешивание с помощью электронных тензовесов перемещаемого шаговым электродвигателем подвешенного на
				тросе контрольного фторопластового цилиндра. Это обеспечивает возможность прямых высокоточных измерений
				распределения плотности в столбе жидкости, определение ее уровня по координате скачка плотности. <br>
				<br>
				<br>
				При отслеживании изменений уровня жидкости цилиндр находится в полупогруженном состоянии, при этом
				расстояние от крыши резервуара до уровня жидкости вычисляется по формуле:
				<br>
			<p style="text-align: center;"><img src="images/r3stat.jpg" alt="img" width="300" height="100" /></p>
			<br>
			</p>
			<p>
				где n – число шагов шагового двигателя; <br>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>k – число мм на один шаг; <br>
					&nbsp;&nbsp;&nbsp;&nbsp;М – текущий вес цилиндра; <br>
					&nbsp;&nbsp;&nbsp;&nbsp;Мж – вес цилиндра в жидкости; <br>
					&nbsp;&nbsp;&nbsp;&nbsp;Н – высота цилиндра; <br>
					&nbsp;&nbsp;&nbsp;&nbsp;а – коэффициент погружения цилиндра, при полупогруженном состоянии а=0,5
					<br></b>
				Для растительных масел а=0,9, т.е. цилиндр почти не касается его, чем обеспечивается отсутствие
				налипания масла.
				Для измерения средней температуры масла в резервуар опущена термоподвеска, состоящая из десяти
				термодатчиков типа “DS 18B20”, позволяющих измерять температуру с точностью +-0,2º.
				Датчик и термоподвеска подключены к блоку сбора информации, соединенному с ПЭВМ, программное обеспечение
				«Дніпро» которой определяет по их данным среднюю температуру масла t. При этом плотность масла
				определяется по известной формуле:
				<br>
			<p style="text-align: center;"><img src="images/r4stat.jpg" alt="img" width="400" height="100" /></p>
			<br>
			</p>
			<p>
				где ρ20 = 916,5 г/л – плотность масла при температуре 20°; <br>
				β=0,000742 – коэффициент температурного расширения масла. <br>
				В ПЭВМ хранится калибровочные характеристики резервуаров, с помощью которых и значений уровня-плотности
				вычисляется количество масла в литрах и килограммах. <br>
				<br>
				При этом обеспечивается: <br>
				<b>● точность измерения уровня - +-1мм; <br>
					● точность измерения температуры - +-0,2º; <br>
					● точность измерения плотности - +-1 г/л; <br>
					● точность измерения количества масла в литрах и килограммах определяется точностью калибровочной
					таблицы. </b><br>
				Результаты измерений выводятся на монитор в следующем виде. <br>
				<br>
			<p style="text-align: center;"><img src="images/r5stat.jpg" alt="img" width="780" height="406" /></p>
			<br>
			</p>
			<p>
				Здесь можно увидеть состояние всего резервуарного парка завода (до 50 резервуаров), состояние и
				результаты измерений выбранного резервуара. <br>
				Программное обеспечение КСКУ резервуарного парка имеет возможности : <br>
				<b>● вести учет поступающего в резервуары масла по показаниям весов– дозаторов масла (изготовитель
					ЧП<br>
					&nbsp;"Фортуна" г. Днепр); <br>
					● вести учет приема масла с авто- и ж/д цистерн; <br>
					● задавать маршруты движения масла с весов на резервуары и с резервуаров на места погрузки (авто-
					или &nbsp;ж/д цистерны); <br>
					● вести учет приема-выдачи масла по показаниям уровнемера; <br>
					● вести историю движения масла в базах данных; <br>
					● формировать единый сменный отчет. </b><br>
				В заключение отметим, что опыт эксплуатации датчиков ИПЖ на Донецком маргариновом заводе показал их
				высокую надежность. <br>
				<br>
				<br>
			</p>
		</div>
	</div>
	<div id="copyright" class="container">
		<p>&copy; <a href="index.php">ЧП "Фортуна"</a>, 1998-
			<?php echo date('Y'); ?><br>+38-050-320-17-85, fortuna_dn@i.ua <br>Дизайн: Леонид Давидчук <br> Все права
			защищены.
		</p>
	</div>
</body>

</html>