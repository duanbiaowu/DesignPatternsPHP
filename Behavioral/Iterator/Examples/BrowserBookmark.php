<?php


namespace DesignPatterns\Behavioral\Iterator\Examples;


class BrowserBookmark
{
    public string $title;

    public string $url;

    /**
     * BrowserBookMark constructor.
     * @param string $title
     * @param string $url
     */
    public function __construct(string $title, string $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}