<?php

class kirbytextExtended extends kirbytext {

  function __construct($text, $markdown=true) {

    parent::__construct($text, $markdown);

    // define custom tags
    $this->addTags('quote');

    $this->addTags('figure');

    // define custom attributes
    $this->addAttributes('caption');

  }

  function quote($params) {

    $author = $params['quote'];

    return '<blockquote>' . $params['text'] . '<hr><footer>' . $author . '</footer></blockquote>';

  }

  function figure($params) {

    // we need to change this to make the image function work.
    $params['image'] = $params['figure'];

    // try to fetch the caption from the alt text if not specified
    if(empty($params['caption'])) $params['caption'] = @$params['alt'];

    // try to fetch the alt text from the caption if not specified
    if(empty($params['alt'])) $params['alt'] = @$params['caption'];

    // start the html output
    $html  = '<figure>';
    $html .= $this->image($params);

    // only add a caption if one is available
    if(!empty($params['caption'])) {
      $html .= '<figcaption>' . $params['caption'] . '</figcaption>';
    }

    $html .= '</figure>';

    return $html;

  }

}

?>
