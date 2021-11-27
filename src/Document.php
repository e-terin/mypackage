<?php

namespace Eterin\Mypackage;

class Document
{

    private string $title;
    private string $content;

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
    public function getContent(): string
    {
        return $this->content;
    }


    /**
     * @param  string  $title
     * @return Document
     */
    public function setTitle(string $title): Document
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param  string  $content
     * @return Document
     */
    public function setContent(string $content): Document
    {
        $this->content = $content;
        return $this;
    }

    public function __construct()
    {
        $this->title = '';
        $this->content = '';
    }

}