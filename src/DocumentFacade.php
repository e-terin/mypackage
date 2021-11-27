<?php

namespace Eterin\Mypackage;

/**
 * @method setTitle(string $string)
 * @method setContent(string $string)
 */
class DocumentFacade
{

    private Document $document;
    protected string $print_type;

    public function __construct()
    {
        $this->document = new Document();
    }

    /**
     * @param  string  $print_type
     * @return $this
     */
    public function setFormat(string $print_type): DocumentFacade
    {
        $this->print_type = $print_type;
        return $this;
    }

    public function print(): void
    {
        $document_writer = new DocumentWriter($this->document);
        $document_writer
            ->setType($this->print_type)
            ->print();
    }

    public function __call($name, $arguments) {
        if (method_exists($this->document, $name)) {
            call_user_func_array([$this->document, $name], $arguments);
        } else {
            throw new \InvalidArgumentException();
        }
        return $this;
    }
}