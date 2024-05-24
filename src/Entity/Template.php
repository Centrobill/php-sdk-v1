<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Language;
use Centrobill\Sdk\ValueObject\Layout;

class Template
{
    /**
     * @var ?Language $language
     */
    private ?Language $language;

    /**
     * @var ?Layout $layout
     */
    private ?Layout $layout;

    /**
     * @var array $templateParameters
     */
    private $templateParameters;

    public function __construct(
        ?Language $language = null,
        ?Layout $layout = null,
        $templateParameters = []
    ) {
        $this->language = $language;
        $this->layout = $layout;
        $this->templateParameters = $templateParameters;
    }

    public function setLanguage(Language $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function setLayout(Layout $layout): self
    {
        $this->layout = $layout;
        return $this;
    }

    public function setTemplateParameters($templateParameters): self
    {
        $this->templateParameters = $templateParameters;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'templateParameters' => $this->templateParameters,
        ];

        if ($this->language !== null) {
            $data['language'] = (string)$this->language;
        }

        if ($this->layout !== null) {
            $data['layout'] = (string)$this->layout;
        }

        return $data;
    }
}
