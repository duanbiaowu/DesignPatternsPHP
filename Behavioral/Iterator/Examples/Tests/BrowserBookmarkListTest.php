<?php

namespace DesignPatterns\Behavioral\Iterator\Examples\Tests;

use DesignPatterns\Behavioral\Iterator\Examples\BrowserBookmark;
use DesignPatterns\Behavioral\Iterator\Examples\BrowserBookmarkList;
use PHPUnit\Framework\TestCase;

class BrowserBookmarkListTest extends TestCase
{
    public function testIterateEmptyBookMarkList()
    {
        $bookmarkList = new BrowserBookmarkList();

        $bookmarks = [];
        foreach ($bookmarkList as $bookmark) {
            $bookmarks[] = [
                $bookmark->getTitle(),
                $bookmark->getUrl(),
            ];
        }

        $this->assertEmpty($bookmarks);
    }

    public function testIterateOverBookMarkList()
    {
        $bookmarkList = new BrowserBookmarkList();
        $bookmarkList->add(new BrowserBookmark('PHP', 'https://www.php.net/'));
        $bookmarkList->add(new BrowserBookmark('MySQL', 'https://www.mysql.com/'));
        $bookmarkList->add(new BrowserBookmark('Linux', 'https://www.linux.org/'));

        $bookmarks = [];
        foreach ($bookmarkList as $bookmark) {
            $bookmarks[] = [
                $bookmark->getTitle(),
                $bookmark->getUrl(),
            ];
        }

        $this->assertSame([
            ['PHP', 'https://www.php.net/'],
            ['MySQL', 'https://www.mysql.com/'],
            ['Linux', 'https://www.linux.org/'],
        ], $bookmarks);
    }

    public function testIterateOverBookMarkListAfterRemovingBook()
    {
        $phpBookmark = new BrowserBookmark('PHP', 'https://www.php.net/');
        $bookmarkList = new BrowserBookmarkList();

        $bookmarkList->add($phpBookmark);
        $bookmarkList->add(new BrowserBookmark('MySQL', 'https://www.mysql.com/'));
        $bookmarkList->add(new BrowserBookmark('Linux', 'https://www.linux.org/'));
        $bookmarkList->remove($phpBookmark);

        $bookmarks = [];
        foreach ($bookmarkList as $bookmark) {
            $bookmarks[] = [
                $bookmark->getTitle(),
                $bookmark->getUrl(),
            ];
        }

        $this->assertSame([
            ['MySQL', 'https://www.mysql.com/'],
            ['Linux', 'https://www.linux.org/'],
        ], $bookmarks);
    }
}
