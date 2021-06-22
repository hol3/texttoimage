<?php

namespace TextToImage;

use TextToImage\Image\ImageGenerator;

class AvatarGenerator
{    

    public function create($text, $size = 78)
    {
        $letters = $this->getLetters($text);
        $avatar = new ImageGenerator();
        //createImage function use parameters: text, text background, background, text size, and image size
        if($avatar->createImage($letters, '#ffffff', '', 22, $size, $size))
            $image = $avatar->showImage();
        return $image;
    }

    protected function getLetters($text)
    {
        $words[] = str_word_count($text);
        $x = count($words);
        $firstWord = str_split($words[0]);
        $secondWord = str_split($words[$x-1]);
        $output = $firstWord[0] . $secondWord[0];
        return $output;
    }
}