<?php

class User
{
    protected int $id;
    protected string $firstName;

    public function visitPage()
    {
        echo "Visiting a page.";
        $this->whoMadeChange();
        echo PHP_EOL;
    }

    public function __construct(int $id, string $firstName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
    }

    protected function whoMadeChange(): void
    {
        echo $this->firstName . " made a change.";
    }
}

class Admin extends User
{

    public function editPage()
    {
        echo "Editing page.";
        $this->whoMadeChange();
        echo PHP_EOL;
    }

    public function closePage()
    {
        echo "Closing Page.";
        $this->whoMadeChange();
        echo PHP_EOL;
    }
}

class Moderator extends User
{

    public function editPage()
    {
        echo "Editing page.";
        $this->whoMadeChange();
        echo PHP_EOL;
    }
}

class Guest extends User
{
}
