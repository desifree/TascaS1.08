<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/numberChecker.php';

class NumberCheckerTest extends TestCase
{
    private NumberChecker $positiveNumber;
    private NumberChecker $negativeNumber;

    protected function setUp(): void
    {
        $this->positiveNumber = new NumberChecker(5);
        $this->negativeNumber = new NumberChecker(-4);
    }

    public function testIsEvenWithOddNumber(): void
    {
        $this->assertFalse($this->positiveNumber->isEven());
    }

    public function testIsEvenWithEvenNumber(): void
    {
        $this->assertTrue($this->negativeNumber->isEven());
    }

    public function testIsPositiveWithPositiveNumber(): void
    {
        $this->assertTrue($this->positiveNumber->isPositive());
    }

    public function testIsPositiveWithNegativeNumber(): void
    {
        $this->assertFalse($this->negativeNumber->isPositive());
    }


}

?>