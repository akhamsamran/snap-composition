<?php

/** write a simple parent class that represents any legtal vehiucle with a license plate this can be a car, truck, horse and buggy, motorcyulcle parade float tesla that
 * then write two child classed of your choice that inhertit from the vehicle class
 finally write a trait ahnt makes a brake -use this trait in one or omre of your child classes
 **/


trait Brake {
    protected $stopper;

    public function brake() : void {
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
 public function __constructor(string $newHorsepower){
 	try{
 		$this->setHorsepower($newHorsepower);
 		}catch(\InvalidArgumentException | \Exception | \TypeError)
 	}
 }
 public function setHorsepower($newHorsepower) : void {
	$newHorsepower = filter_var($newHorsepower, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$newHorsepower = strtoupper(trim($newHorsepower));

	if(preg_match("/^[A-Z]{3}\d{3}/", $newHorsepower)){
		throw(new InvalidArgumentException("bad horsepower number"));
	}
	$this->horsepower = $newHorsepower;
		//(/d is the same as [0-9])...preg_match() returns 1 if the pattern matches given subject, 0 if it does not, or FALSE if an error occurred. WTF dynamic binding "$"
 }
class ParadeFloat extends Vehicle {
	protected $isGettingAwayVerySlowly;
	public function getIsGettingAwayVerySlowly( : bool {
		return
	})
/**
* <?php
trait Brake {
    public function brake() : void {
        echo "Unlike a lot of Burqueños, I stop for red lights" . PHP_EOL;
    }
}

class Vehicle {
    protected $plateNo;

    public function __constructor(string $newPlateNo) {
        try {
            $this->setPlateNo($newPlateNo);
        } catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
            $exceptionType = get_class($exception);
            throw(new $exceptionType($exception->getMessage(), 0, $exception));
        }
    }

    public function getPlateNo() : string {
        return($this->plateNo);
    }

    public function setPlateNo(string $newPlateNo) : void {
        $newPlateNo = filter_var($newPlateNo, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        $newPlateNo = strtoupper(trim($newPlateNo));

        if(preg_match("/^[A-Z]{3}\d{3}$/", $newPlateNo) !== 1) {
            throw(new \InvalidArgumentException("bad plate number - ABQ PD is on the way"));
        }

        $this->plateNo = $newPlateNo;
    }
}

class ParadeFloat extends Vehicle {
    use Brake;

    protected $isGettingAwayVerySlowly;

    public function __construct($newIsGettingAwayVerySlowly, string $newPlateNo) : void {
        try {
            parent::__construct($newPlateNo);
            $this->setIsGettingAwayVerySlowly($newIsGettingAwayVerySlowly);
        } catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
            $exceptionType = get_class($exception);
            throw(new $exceptionType($exception->getMessage(), 0, $exception));
        }
    }

    public function getIsGettingAwayVerySlowly() : bool {
        return($this->isGettingAwayVerySlowly);
    }

    public function setIsGettingAwayVerySlowly($newIsGettingAwayVerySlowly) : void {
        $newIsGettingAwayVerySlowly = filter_var($newIsGettingAwayVerySlowly, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

        if($newIsGettingAwayVerySlowly === null) {
            throw(new InvalidArgumentException("unable to determine if he's getting away"));
        }

        $this->isGettingAwayVerySlowly = $newIsGettingAwayVerySlowly;
    }
}**/

?>


