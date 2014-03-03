<?php

class kirbytextExtended extends kirbytext {

  function __construct($text, $markdown=true) {

    parent::__construct($text, $markdown);

    // define custom tags
    $this->addTags('quote');

  }

  function quote($params) {

    $author = $params['quote'];

    return '<blockquote>' . $params['text'] . '<hr><footer>' . $author . '</footer></blockquote>';

  }

}

?>
