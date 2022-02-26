<?php
	class FileLogger
	{
		// массив всех созданных объектов-журналов
		static public $loggers = [];
		// время создания объекта
		private $time;
		// закрытый конструктор: создание объектов извне запрещено!
		private function __construct($fname)
		{
			// запомним время создания этого объекта
			$this->time = microtime(true);
		}
		// открытый метод, предназначенный для создания объектов класса.
		// создать новый объект можно только с его помощью!
		public static function create($fname)
		{
			// вначале проверяем: возможно, объект для указанного имени
			// файла уже существует? ТОгда его и возвращаем
			if (isset(self::$loggers[$fname]))
				return self::$loggers[$fname];
			// а иначе создаем полностью новый объект и сохраняем ссылку
			// на него в статическом массиве
			return self::$loggers[$fname]=new self($fname);
		}
		// возвращает время создания объекта
		public function getTime() { return $this->time; }
		// дальше могут идти остальные методы класса
	}
	// пример использования класса.
	#$logger = new FileLogger("a");
	$logger1 = FileLogger::create("file.log");
	sleep(1);
	$logger2 = FileLogger::create("file.log");
	// выводим времена создания обоих объектов
	echo "{$logger1->getTime()}, {$logger2->getTime()} ";
?>