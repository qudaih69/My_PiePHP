<?php

spl_autoload_register(function ($class) {
    
    $class = str_replace('\\', '/', $class);
    
    $spaceName = explode('/',$class)[0];
    $className = explode('/',$class)[1];
    
    if (file_exists(implode(DIRECTORY_SEPARATOR, ['src', 'Controller',$className.'.php']))) {
        require_once(implode(DIRECTORY_SEPARATOR, ['src', 'Controller',$className.'.php']));
    } elseif(file_exists(implode(DIRECTORY_SEPARATOR, ['Core',$className.'.php']))) {
        require_once(implode(DIRECTORY_SEPARATOR, ['Core',$className.'.php']));
    } elseif (file_exists(implode(DIRECTORY_SEPARATOR, ['src', 'Model',$className.'.php']))) {
        require_once(implode(DIRECTORY_SEPARATOR, ['src', 'Model',$className.'.php']));
    }
});
