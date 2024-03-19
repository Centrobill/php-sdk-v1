<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Language;
use Centrobill\Sdk\ValueObject\Layout;
use Centrobill\Sdk\ValueObject\TemplateParameters;

class Template
{
    /**
     * @var Language $language
     */
    private Language $language;

    /**
     * @var Layout $layout
     */
    private Layout $layout;

    /**
     * @var TemplateParameters $templateParameters
     */
    private TemplateParameters $templateParameters;

    public function __construct(
        Language $language = null,
        Layout $layout = null,
        TemplateParameters $templateParameters = null,
    ) {
        $this->language = $language;
        $this->layout = $layout;
        $this->templateParameters = $templateParameters;
    }

    public function setLanguage(Language $language)
    {
        $this->language = $language;
        return $this;
    }

    public function setLayout(Layout $layout)
    {
        $this->layout = $layout;
        return $this;
    }

    public function setTemplateParameters(TemplateParameters $templateParameters)
    {
        $this->templateParameters = $templateParameters;
        return $this;
    }

    public function toArray()
    {
        $data = [];

        if ($this->language !== null) {
            $data['language'] = (string)$this->language;
        }

        if ($this->layout !== null) {
            $data['layout'] = (string)$this->layout;
        }

        if ($this->templateParameters !== null) {
            $data['templateParameters'] = (string)$this->templateParameters;
        }

        return $data;
    }
}
