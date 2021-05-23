<?php


namespace DesignPatterns\Behavioral\Command\Examples;


class UserInvoker
{
    private Command $enableCommand;

    private Command $disableCommand;

    private ?Command $undoCommand = null;

    /**
     * ButtonController constructor.
     * @param Command $enableCommand
     * @param Command $disableCommand
     */
    public function __construct(Command $enableCommand, Command $disableCommand)
    {
        $this->enableCommand = $enableCommand;
        $this->disableCommand = $disableCommand;
    }

    public function pushEnableButton()
    {
        $this->enableCommand->execute();
        $this->undoCommand = $this->enableCommand;
    }

    public function pushDisableButton()
    {
        $this->disableCommand->execute();
        $this->undoCommand = $this->disableCommand;
    }

    public function pushUndoButton()
    {
        $this->undoCommand->undo();
    }
}