<?php
  class Views {
    public function get($filename, $title = "", $meta = []) {
      $page = VIEWS . $filename . ".php";
      $title = $title == "" ? APP_NAME : $title . " | " . APP_NAME;
      require_once($page);
    }
  }
?>