<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php
        class StopWatch {
            /**
            * @var $startTimes array The start times of the StopWatches
            */
            private static $startTimes = array();
            /**
            * Start the timer
            *
            * @param $timerName string The name of the timer
            * @return void
            */
            public static function start($timerName = 'default') {
                self::$startTimes[$timerName] = microtime(true);
            }
            /**
            * Get the elapsed time in seconds
            *
            * @param $timerName string The name of the timer to start
            * @return float The elapsed time since start() was called
            */
            public static function elapsed($timerName = 'default') {
                return microtime(true) - self::$startTimes[$timerName];
            }
        }
        // start the timer
        StopWatch::start();
        // your script - this is an example
        sleep(1);
        // check how long 2 seconds is...
        echo 'Elapsed time: ' . StopWatch::elapsed() . ' seconds';
        ?>
</body>
</html>