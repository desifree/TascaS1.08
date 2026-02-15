<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\SpeedSensor;

class SpeedSensorTest extends TestCase
{
    public function testBasicVerySlow()
    {
        $sensor = new SpeedSensor(10);
        $this->assertEquals("Very slow", $sensor->rateSpeed());
    }

    public function testBasicSuitable()
    {
        $sensor = new SpeedSensor(50);
        $this->assertEquals("Suitable speed", $sensor->rateSpeed());
    }

    public function testBasicSlightExcess()
    {
        $sensor = new SpeedSensor(70);
        $this->assertEquals("Slight excess", $sensor->rateSpeed());
    }

    public function testBasicModerateExcess()
    {
        $sensor = new SpeedSensor(90);
        $this->assertEquals("Moderate excess", $sensor->rateSpeed());
    }

    public function testBasicSeriousExcess()
    {
        $sensor = new SpeedSensor(120);
        $this->assertEquals("Serious excess", $sensor->rateSpeed());
    }

    public function testThresholds()
    {
        $this->assertEquals("Very slow", (new SpeedSensor(29))->rateSpeed());
        $this->assertEquals("Suitable speed", (new SpeedSensor(30))->rateSpeed());
        $this->assertEquals("Suitable speed", (new SpeedSensor(60))->rateSpeed());
        $this->assertEquals("Slight excess", (new SpeedSensor(61))->rateSpeed());
        $this->assertEquals("Slight excess", (new SpeedSensor(80))->rateSpeed());
        $this->assertEquals("Moderate excess", (new SpeedSensor(81))->rateSpeed());
        $this->assertEquals("Moderate excess", (new SpeedSensor(100))->rateSpeed());
        $this->assertEquals("Serious excess", (new SpeedSensor(101))->rateSpeed());
    }
}