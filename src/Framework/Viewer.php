<?php 

namespace Framework;

class Viewer {

    public function render(string $template, array $data = []) {
        extract($data, EXTR_SKIP);

        ob_start();

        require "views/$template";

        return ob_get_clean();
    }

}

?>