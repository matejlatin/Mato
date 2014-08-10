<?php

class DribbleShots
{
    public $cache_folder;
    public $pic_cache_folder;
    public $pic_cache_absolute_folder;
    
    public function __construct()
    {
        $this->cache_folder = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/dribble_cache/';
        $this->pic_cache_folder = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/dribble_pics/';
        $this->pic_cache_absolute_folder = '/assets/images/dribble_pics/';
    }
    
    public function display()
    {
        $date = date('Y-m-d', time());
        $output = '';
        
        if (!file_exists($this->cache_folder . 'dribble_' . $date . '.html'))
        {
            foreach (glob($this->cache_folder . "dribble_*.html") as $filename) {
                unlink($filename);
            }
            
            $array = file_get_contents('http://api.dribbble.com/players/matejlatin/shots');
            $obj = json_decode($array,true);
            
            foreach(array_slice($obj['shots'], 0, 10) as $item)
            {
                $image_url_xplode = explode('/', $item['image_url']);
                $image = array_pop($image_url_xplode);
                
                if (!file_exists($this->pic_cache_folder . $image))
                {
                    $image_content = file_get_contents($item['image_url']);
                    file_put_contents($this->pic_cache_folder . $image, $image_content);
                }
                
                //$output .= "<li><a href='". $item['url'] ."'><img src='". $item['image_url'] ."' alt='". $item['title'] ."' /></a></li>";
                $output .= "<li><a href='". $item['url'] ."' title='". $item['title'] ."'><img src='". $this->pic_cache_absolute_folder . $image ."' alt='". $item['title'] ."' /></a></li>";
            }
            
            file_put_contents($this->cache_folder . 'dribble_' . $date . '.html', $output);
        }
        else
        {
            //echo 'cached';
            $output = file_get_contents($this->cache_folder . 'dribble_' . $date . '.html');
        }
        
        echo $output;
    }
    
}

?>