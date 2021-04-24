<?php


namespace DesignPatterns\Behavioral\Iterator\Examples;


class BrowserBookmarkList implements \Iterator
{
    /**
     * @var BrowserBookmark[]
     */
    private array $bookmarks = [];

    private int $index = 0;

    public function current(): BrowserBookmark
    {
        return $this->bookmarks[$this->index];
    }

    public function next()
    {
        $this->index++;
    }

    public function key(): int
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return isset($this->bookmarks[$this->index]);
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function add(BrowserBookmark $bookMark)
    {
        $this->bookmarks[] = $bookMark;
    }

    public function remove(BrowserBookmark $bookMark)
    {
        foreach ($this->bookmarks as $key => $value) {
            if ($value->title == $bookMark->title && $value->url == $bookMark->url) {
                unset($this->bookmarks[$key]);
            }
        }

        $this->bookmarks = array_values($this->bookmarks);
    }
}