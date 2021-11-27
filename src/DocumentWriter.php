<?php

namespace Eterin\Mypackage;

use Dompdf\Dompdf;

class DocumentWriter
{

    protected Document $document;
    private string $type = '';

    public const TYPE_PDF = 'pdf';

    /**
     * @param  string  $type
     */
    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    /**
     * @param  string  $type
     * @return DocumentWriter
     */
    public function setType(string $type): DocumentWriter
    {
        if ($type !== self::TYPE_PDF) {
            throw new \InvalidArgumentException('Не правильно задан тип печатаемого документа. Доступные типы: ' . self::TYPE_PDF);
        }
        $this->type = $type;
        return $this;
    }

    /**
     *
     */
    public function print(): void
    {
        if(empty($this->type) || $this->type === self::TYPE_PDF ){
            $html = "<h1>{$this->document->getTitle()}</h1><p>{$this->document->getContent()}</p>";
            $writer_pdf = new WriterPdf();
            $writer_pdf->print($html);
        }
        else {
            throw new \RuntimeException('Не правильно задан тип печатаемого документа. Используйте -> setType()');
        }

    }

}