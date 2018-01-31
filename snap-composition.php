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
    protected $horsepower;
    protected $shape;
    protected $maxSpeed;
    protected $comfort;
}
class troika extends vehicle{
    protected $sled;

    public function JingleBells() : void {
    	echo "Buistra, buistra!" . PHP_EOL;
	 }
}
class stagecoach extends vehicle {
	use Brake;
	protected $wheels;

	public function escape(): void {
		echo "I shot them robbers dead!" . PHP_EOL;
	}
}
/** notes based on Dylan's solution**/
 public function getHorsepower() : string {
	return($this->horsepower);
 }
 public function setHorsepower($newHorsepower) : void {
	$newHorsepower = filter_var($newHorsepower, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$newHorsepower = strtoupper(trim($newHorsepower));

	if(preg_match("/^[A-Z]{3}\d{3}/", $newHorsepower)){
		throw(new InvalidArgumentException("bad horsepower number"));
	}
	$this->horsepower = $newHorsepower;
		//(/d is the same as [0-9])...preg_match() returns 1 if the pattern matches given subject, 0 if it does not, or FALSE if an error occurred.
 }
?>


