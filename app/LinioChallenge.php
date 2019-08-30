<?php

namespace App;

/**
 * Challenge for Linio – Sr. Backend Developer
 * 
 * @author Guillermo Garrote <gmgarrote@gmail.com>
 */
class LinioChallenge
{
	private $multipleA = 3;
	private $valMultipleA = 'Linio';
	private $multipleB = 5;
	private $valMultipleB = 'IT';
	private $valMultipleAyB = 'Linianos';
	private $minNumberToPrint = 1;
	private $maxNumberToPrint = 100;

    /**
     * Returns the value or the number for a given number with its
     * multipleA and MultipleB.
     */
 	private function findVal($num, $multiple1, $multiple2, $valTrue) 
 	{
		if ( ((int)$num % $multiple1 == 0) && ((int)$num % $multiple2 == 0) && is_numeric($num) )
		{
			return $valTrue;
		} 
		return $num;
	}

    /**
     * Process the given numbers and access the findVal function
     * for the right value.
     *
     * @return array
     */
    private function process()
    {
		for ($i=$this->minNumberToPrint; $i<=$this->maxNumberToPrint; $i++){
		    $returnNumOrVal = $i;
		    $returnNumOrVal = $this->findVal($returnNumOrVal, $this->multipleA, $this->multipleB, $this->valMultipleAyB);
		    $returnNumOrVal = $this->findVal($returnNumOrVal, $this->multipleA, 1, $this->valMultipleA);
		    $returnNumOrVal = $this->findVal($returnNumOrVal, $this->multipleB, 1, $this->valMultipleB);
		    $this->result[] = $returnNumOrVal;
		}
		return $this->result;
    }

    /**
     * Prints the values from the process function.
     *
     * @return array
     */
    public function outputTerminal()
    {
        $data = $this->process();
        foreach ($data as $value) {
            echo $value . PHP_EOL;
        }
        return $data;
    }
}

$linio = new LinioChallenge();
$linio->outputTerminal();
