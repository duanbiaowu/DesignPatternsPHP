<?php


namespace DesignPatterns\Behavioral\Observer\Examples;


use SplObserver;

class BlogSubject implements \SplSubject
{
    private string $title;

    private string $content;

    private \SplObjectStorage $observers;

    /**
     * BlogSubject constructor.
     * @param string $title
     * @param string $content
     */
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function publish()
    {
        $this->notify();
    }
}