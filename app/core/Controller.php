<?php
class Controller {
    protected function loadView($view, $data = []) {
        extract($data);  // Make data variables available to the view
        require "app/views/$view.php";
    }
}
?>
