<?php 

	class Hello {

		public static $defaultMessage = "Hello, World!";

		public static function doSomething() {
			echo "No problem." . PHP_EOL;
		}

		public function sayHello($to = null) {
			if (!empty($to)) {
				echo "Hello, $to!" . PHP_EOL;
			} else {
				echo self::$defaultMessage . PHP_EOL;
			}
		}
	}

	$h1 = new Hello();
	$h2 = new Hello();

	Hello::$defaultMessage = "Hello from static attribute.";

	$h1->sayHello("Codeup");
	$h1->sayHello();

	$h2->sayHello("Codeup");
	$h2->sayHello();

	Hello::doSomething();

?>