<?php

    // Connect to DB
    // The include_once statement includes and evaluates the specified file during the execution of the script. 
    // **Source: http://php.net/manual/en/function.include-once.php**
    include_once('include/common/db.php');

?>

<div id="default-header">
    <div class="container">
        <div id="top-bar">
            <div id="search-bar">
                <form>
                    <input placeholder="Search Card" id="search-form" type="text">
                </form>
            </div>
            <div id="dropdown-menu">
                <button type="button" id="qr-code">BTN</button>
            </div>
        </div>
        <div id="tab-bar">
            <ul>
                <li><a href="card-new.php">Stamp</a></li>
                <li class="active"><a href="index.php">Point</a></li>
            </ul>
        </div>
    </div>
</div>