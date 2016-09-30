/**
 * Created by Daniel on 8/30/2016.
 */
var i = 0;

function timedCount() {
    i = i + 1;
    postMessage(i);
    setTimeout("timedCount()",500);
}

timedCount();
