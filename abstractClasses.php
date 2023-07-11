<?php


abstract class MusicInstrument
{
    protected static string $instrument = "";
    protected static int $counter = 0;

    public static function printingCounter(): void {
        echo self::$counter;
    }

    public function play()
    {
        echo 'Playing: ' . self::$instrument;
    }
}

class Violin extends MusicInstrument
{

    public function __construct()
    {
        self::$instrument = 'Violin';
        MusicInstrument::$counter += 1;
    }

    public function __destruct()
    {
        MusicInstrument::$counter -= 1;
    }
}

class Piano extends MusicInstrument
{
    public function __construct()
    {
        self::$instrument = 'Piano';
        MusicInstrument::$counter += 1;
    }

    public function __destruct()
    {
        MusicInstrument::$counter -= 1;
    }
}

MusicInstrument::printingCounter();
echo PHP_EOL;
$violin = new Violin();
$violin->play();
echo PHP_EOL;
$piano = new Piano();
$piano->play();
echo PHP_EOL;
MusicInstrument::printingCounter();


