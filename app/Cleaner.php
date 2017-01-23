<?php

namespace GazeOfTheWorld;

require_once "vendor/autoload.php";

class Cleaner
{
    public static function cleanArticle($article)
    {
        $exploders = [' ', '.', ',', '!', '?', ';', ':', ')', '('];

        $stopwords = Stopwords::get('English');

        // Clean title.
        $title = [];
        $titleWords = Cleaner::multiexplode($exploders, $article["title"]);
        foreach ($titleWords as $word) {
            if (!in_array($word, $stopwords)) {
                $title[] = $word;
            }
        }
        $article["title"] = implode(' ', $title);

        // Clean description.
        $desc = [];
        $descWords = Cleaner::multiexplode($exploders, $article["description"]);
        foreach ($descWords as $word) {
            if (!in_array($word, $stopwords)) {
                $desc[] = $word;
            }
        }
        $article["description"] = implode(' ', $desc);

        // Clean content.
        $content = [];
        $contentWords = Cleaner::multiexplode($exploders, $article["content"]);
        foreach ($contentWords as $word) {
            if (!in_array($word, $stopwords)) {
                $content[] = $word;
            }
        }
        $article["content"] = implode(' ', $content);

        return $article;
    }


    private static function multiexplode($delimiters, $string)
    {
        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);

        return $launch;
    }
}