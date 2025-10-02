<?php

function windowBar($title){
    echo "<section class='window' style='width: 30vw;'>
    <div class='window-bar'>
        <div class='window-bar-control'>
            <i class='window-bar-button'><span>?</span></i>
        </div>
        <div class='window-bar-title'>
            <div class='window-bar-text'>
                $title
            </div>
        </div>
        <div class='window-bar-control'>
            <i class='window-bar-button'><span>_</span></i>
            <i class='window-bar-button'><span>X</span></i>
        </div>
    </div>

    ";
}




    