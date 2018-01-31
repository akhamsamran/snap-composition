<?php

/** write a simple parent class that represents any legtal vehiucle with a license plate this can be a car, truck, horse and buggy, motorcyulcle parade float tesla that
 * then write two child classed of your choice that inhertit from the vehicle class
 finally write a trait ahnt makes a brake -use this trait in one or omre of your child classes
 **/


trait Brake {
    protected $stopper;

    public function skid() : void {
        echo "Hold yer horses!" . PHP_EOL;
    }
    }
class vehicle{
    protected $horseposer;
    protected $shape;
    protected $maxSpeed;
    protected $comfort;
}
class troika extends vehicle{
    protected $sled;
}
class stagecoach extends vehicle {
	use Brake;
	protected $wheels;

	public function escape(): void {
		echo "I shot them robbers dead" . PHP_EOL;
	}
}

?>


