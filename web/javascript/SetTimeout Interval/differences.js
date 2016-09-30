/**
 * Created by Daniel on 8/30/2016.
 */


/*
*   Timeout
*
*   It waits 1000ms, runs the function(while takes a few ms),
*   then sets another timeout.
*   So the period is actually a bit more than 1000ms.
*
* */

function myTimeoutFunction()
{
    doStuff();
    setTimeout(myTimeoutFunction, 1000);
}
myTimeoutFunction();



/*
* Interval
*
* It executes exactly every 1000ms.
*
* */


function myTimeoutFunction()
{
    doStuff();
}

myTimeoutFunction();
setInterval(myTimeoutFunction, 1000);