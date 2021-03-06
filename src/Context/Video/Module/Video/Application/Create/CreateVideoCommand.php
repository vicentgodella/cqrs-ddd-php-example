<?php

namespace CodelyTv\Context\Video\Module\Video\Application\Create;

use CodelyTv\Shared\Domain\Bus\Command\Command;
use CodelyTv\Types\ValueObject\Uuid;

final class CreateVideoCommand extends Command
{
    private $id;
    private $title;
    private $url;
    private $courseId;

    public function __construct(Uuid $commandId, string $id, string $title, string $url, string $courseId)
    {
        parent::__construct($commandId);

        $this->id       = $id;
        $this->title    = $title;
        $this->url      = $url;
        $this->courseId = $courseId;
    }

    public function id() : string
    {
        return $this->id;
    }

    public function title() : string
    {
        return $this->title;
    }

    public function url() : string
    {
        return $this->url;
    }

    public function courseId() : string
    {
        return $this->courseId;
    }
}
